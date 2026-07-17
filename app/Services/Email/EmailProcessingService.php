<?php

declare(strict_types=1);

namespace App\Services\Email;

use App\Contracts\Email\EmailProcessingServiceInterface;
use App\Contracts\Email\EmailServiceInterface;
use App\Contracts\Logging\LoggingServiceInterface;
use App\Contracts\Sap\SapArchiveServiceInterface;
use App\Enum\Status;
use App\Exceptions\Email\EmailDeliveryException;
use App\Models\EmailQueue;

final readonly class EmailProcessingService implements EmailProcessingServiceInterface
{
    public function __construct(private EmailServiceInterface $mailer, private LoggingServiceInterface $logger, private SapArchiveServiceInterface $sapArchive)
    {
        //
    }

    public function processPending(): void
    {
        EmailQueue::query()
            ->whereIn('status', [
                Status::PENDING,
                Status::FAILED,
            ])
            ->where('attempts', '<', $this->maxAttempts())
            ->where(function ($query): void {
                $query->whereNull('next_retry_at')
                    ->orWhere('next_retry_at', '<=', now());
            })
            ->orderBy('id')
            ->chunkById(100, function ($emails): void {
                $this->logger->info('Fetched queued emails');

                foreach ($emails as $email) {
                    $attempt = $email->attempts + 1;

                    $email->update([
                        'status' => Status::PROCESSING,
                        'attempts' => $attempt,
                    ]);

                    $this->logger->info('Email Details', [$email]);
                    $preparedAttachment = $this->sapArchive->prepare($email->attachment);

                    if ($preparedAttachment === null) {
                        $this->logger->error('SAP attachment not found.', [
                            'attachment' => $email->attachment,
                        ]);

                        $email->update([
                            'status' => Status::ABANDONED,
                            'error' => 'SAP attachment not found.',
                            'response' => json_encode([
                                'success' => false,
                                'reason' => 'SAP attachment not found.',
                                'attachment' => $email->attachment,
                            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
                            'next_retry_at' => null,
                            'processed_at' => now(),
                        ]);

                        continue;
                    }

                    try {
                        $this->mailer->send(
                            recipients: $email->recipients,
                            subject: $email->subject,
                            header: $email->header,
                            message: $email->message,
                            attachment: $preparedAttachment,
                        );

                        $newPath = $this->sapArchive->archive($preparedAttachment, $email->attachment);

                        $email->update([
                            'status' => Status::PROCESSED,
                            'processed_at' => now(),
                            'next_retry_at' => null,
                            'response' => json_encode([
                                'success' => true,
                                'attempt' => $attempt,
                                'processed_at' => now()->toDateTimeString(),
                            ]),
                            'error' => null,
                        ]);

                        $this->logger->info('Processed queued emails');

                        $this->logger->info('SAP file archived.', [
                            'from' => $email->attachment,
                            'to' => $newPath,
                        ]);
                    } catch (EmailDeliveryException $e) {
                        $this->logger->error(
                            'Email delivery failed.',
                            [
                                'recipient' => $e->recipient,
                                'response' => $e->response,
                            ]
                        );

                        $status = $attempt >= $this->maxAttempts()
                            ? Status::ABANDONED
                            : Status::FAILED;

                        $email->update([
                            'status' => $status,
                            'error' => $e->getMessage(),
                            'response' => json_encode(
                                $e->response,
                                JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE,
                            ),
                            'next_retry_at' => $status === Status::FAILED
                                ? now()->addMinutes($this->retryDelay($attempt))
                                : null,
                        ]);

                        report($e);
                    }
                }
            });
    }

    private function maxAttempts(): int
    {
        return (int) config('mail.max_attempts', 3);
    }

    private function retryDelay(int $attempt): int
    {
        return match ($attempt) {
            1 => 1,
            2 => 5,
            3 => 15,   // retry after 15 minutes
            default => 30,
        };
    }
}
