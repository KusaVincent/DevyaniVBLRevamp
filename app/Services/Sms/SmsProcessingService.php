<?php

namespace App\Services\Sms;

use App\Contracts\Logging\LoggingServiceInterface;
use App\Contracts\Sms\CelcomSmsServiceInterface;
use App\Contracts\Sms\SmsMessageBuilderInterface;
use App\Contracts\Sms\SmsProcessingServiceInterface;
use App\Enum\ProcessSMSTxn;
use App\Enum\Status;
use App\Exceptions\Sms\SmsDeliveryException;
use App\Exceptions\Sms\SmsRejectedException;
use App\Models\SmsQueue;

final readonly class SmsProcessingService implements SmsProcessingServiceInterface
{
    public function __construct(private CelcomSmsServiceInterface $sms, private SmsMessageBuilderInterface $builder, private LoggingServiceInterface $logger) {
        //
    }

    public function processPending(): void
    {
        $this->logger->info('Starting SMS processing');

        SmsQueue::query()
            ->whereIn('status', [Status::PENDING, Status::FAILED])
            ->where('attempts', '<', $this->maxAttempts())
            ->where('process', ProcessSMSTxn::YES)
            ->where(function ($query) {
                $query->whereNull('next_retry_at')
                    ->orWhere('next_retry_at', '<=', now());
            })
            ->orderBy('id')
            ->chunkById(100, function ($messages) {
                $this->logger->info('Fetched from SMS queue');

                foreach ($messages as $message) {
                    $message->update([
                        'status' => Status::PROCESSING,
                        'attempts' => $message->attempts + 1,
                    ]);

                    try {
                        $response = $this->sms->send(
                            $message->recipient_mobile,
                            $this->builder->build($message),
                        );

                        $message->update([
                            'status' => Status::PROCESSED,
                            'processed_at' => now(),
                            'response' => $response,
                            'error' => null,
                            'next_retry_at' => null,
                        ]);

                        $this->logger->info('Processed SMS');
                    } catch (SmsRejectedException $e) {
                        $message->update([
                            'status' => Status::ABANDONED,
                            'error' => $e->getMessage(),
                            'response' => $e->response,
                        ]);

                        $this->logger->error($e->getMessage());

                        report($e);
                    } catch (SmsDeliveryException $e) {
                        $status = $message->attempts >= $this->maxAttempts()
                            ? Status::ABANDONED
                            : Status::FAILED;

                        $message->update([
                            'status' => $status,
                            'error' => $e->getMessage(),
                            'response' => $e->response,
                            'next_retry_at' => $status === Status::FAILED
                                ? now()->addMinutes(
                                    $this->retryDelay($message->attempts)
                                )
                                : null,
                        ]);

                        $this->logger->error($e->getMessage());

                        report($e);
                    }
                }
            });
    }

    private function maxAttempts(): int
    {
        return (int) config('services.celcom.max_attempts', 3);
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
}
