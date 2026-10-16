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
use Illuminate\Support\Facades\File;
use RuntimeException;
use Throwable;

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
                $query
                    ->whereNull('next_retry_at')
                    ->orWhere('next_retry_at', '<=', now());
            })
            ->orderBy('id')
            ->chunkById(100, function ($emails): void {
                $this->logger->info('Fetched queued emails', [
                    'count' => $emails->count(),
                ]);

                foreach ($emails as $email) {
                    $attempt = $email->attempts + 1;

                    try {
                        $email->update([
                            'status' => Status::PROCESSING,
                            'attempts' => $attempt,
                            'error' => null,
                        ]);

                        $archivedAtFile = $email->archived_at_file ?? null;

                        $this->logger->info('Processing queued email.', [
                            'email_id' => $email->id,
                            'attempt' => $attempt,
                            'attachment' => $email->attachment,
                            'archived_at_file' => $archivedAtFile,
                        ]);

                        $preparedAttachment = $this->resolveAttachment($email);

                        if ($preparedAttachment === null) {
                            throw new RuntimeException(
                                'SAP attachment not found: '.$email->attachment
                            );
                        }

                        $this->mailer->send(
                            recipients: $email->recipients,
                            subject: $email->subject,
                            header: $email->header,
                            message: $email->message,
                            attachment: $preparedAttachment,
                        );

                        $newPath = $email->archived_at_file;

                        $newPath ??= $this->sapArchive->archive(
                            $preparedAttachment,
                            $email->attachment,
                        );

                        $email->update([
                            'status' => Status::PROCESSED,
                            'archived_at_file' => $newPath,
                            'processed_at' => now(),
                            'next_retry_at' => null,
                            'response' => json_encode([
                                'success' => true,
                                'attempt' => $attempt,
                                'processed_at' => now()->toDateTimeString(),
                            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
                            'error' => null,
                        ]);

                        $this->logger->info('Processed queued email.', [
                            'email_id' => $email->id,
                            'attempt' => $attempt,
                        ]);

                        $this->logger->info('SAP file archived.', [
                            'email_id' => $email->id,
                            'from' => $email->attachment,
                            'to' => $newPath,
                        ]);
                    } catch (EmailDeliveryException $e) {
                        $this->handleFailure(
                            email: $email,
                            attempt: $attempt,
                            e: $e,
                        );
                    } catch (Throwable $e) {
                        $this->handleUnexpectedFailure(
                            email: $email,
                            attempt: $attempt,
                            e: $e,
                        );
                    }
                }
            });
    }

    private function resolveAttachment(EmailQueue $email): ?string
    {
        if ($email->archived_at_file !== null) {
            if (File::exists($email->archived_at_file)) {
                return $email->archived_at_file;
            }

            $archivedFileName = basename($email->archived_at_file);
            $archiveDir = dirname($email->archived_at_file);
            $archivePath = $archiveDir.'/archive/'.$archivedFileName;

            if (File::exists($archivePath)) {
                $destination = $archiveDir.'/'.$archivedFileName;

                File::move($archivePath, $destination);

                return $destination;
            }
        }

        $preparedAttachment = $this->sapArchive->prepare($email->attachment);

        if ($preparedAttachment !== null && File::exists($preparedAttachment)) {
            return $preparedAttachment;
        }

        return null;
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
            3 => 15,
            default => 30,
        };
    }

    private function handleFailure(EmailQueue $email, int $attempt, EmailDeliveryException $e): void
    {
        $status = $attempt >= $this->maxAttempts() ? Status::ABANDONED : Status::FAILED;

        $email->update([
            'status' => $status,
            'error' => $e->getMessage(),
            'processed_at' => $status === Status::ABANDONED ? now() : null,
            'response' => json_encode($e->response, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
            'next_retry_at' => $status === Status::FAILED ? now()->addMinutes($this->retryDelay($attempt)) : null,
        ]);

        $this->logger->error('Email delivery failed.', [
            'email_id' => $email->id,
            'attempt' => $attempt,
            'recipient' => $e->recipient,
            'response' => $e->response,
        ]);

        report($e);
    }

    private function handleUnexpectedFailure(EmailQueue $email, int $attempt, Throwable $e): void
    {
        $status = $attempt >= $this->maxAttempts() ? Status::ABANDONED : Status::FAILED;

        $email->update([
            'status' => $status,
            'error' => $e->getMessage(),
            'response' => json_encode([
                'success' => false,
                'attempt' => $attempt,
                'exception' => $e::class,
                'message' => $e->getMessage(),
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
            'processed_at' => $status === Status::ABANDONED ? now() : null,
            'next_retry_at' => $status === Status::FAILED ? now()->addMinutes($this->retryDelay($attempt)) : null,
        ]);

        $this->logger->error('Unexpected email processing failure.', [
            'email_id' => $email->id,
            'attempt' => $attempt,
            'exception' => $e::class,
            'message' => $e->getMessage(),
        ]);

        report($e);
    }
}
