<?php

declare(strict_types=1);

namespace App\Services\Health;

use App\Contracts\Email\EmailServiceInterface;
use App\Contracts\Health\ConfirmationHealthServiceInterface;
use App\Contracts\Logging\LogArchiveServiceInterface;
use App\Contracts\Logging\LoggingServiceInterface;
use App\Enum\ProcessSMSTxn;
use App\Models\ConfirmationTransaction;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;

final readonly class ConfirmationHealthService implements ConfirmationHealthServiceInterface
{
    private int $period;

    private string $cacheKey;

    public function __construct(private EmailServiceInterface $email, private LoggingServiceInterface $logger, private LogArchiveServiceInterface $logArchive)
    {
        $this->cacheKey = config('confirmation.cache.key');
        $this->period = (int) config('confirmation.health.check.period');
    }

    public function check(): void
    {
        $this->logger->info('Starting confirmation health check');

        $transaction = ConfirmationTransaction::query()
            ->where('process', ProcessSMSTxn::YES)
            ->latest()
            ->first();

        if (! $transaction) {
            $this->logger->warning('No confirmation transactions found.');

            return;
        }

        $cutoff = now()->subHours($this->period)->setMicrosecond(0);

        if ($transaction->created_at >= $cutoff) {
            Cache::forget($this->cacheKey);

            $this->logger->info(sprintf('Latest confirmation transaction is within the last %d hours.', $this->period), [
                'transaction' => $transaction->transaction_id,
                'received_at' => $transaction->created_at,
            ]);

            return;
        }

        if (Cache::has($this->cacheKey)) {
            $this->logger->info('Confirmation health alert already sent.');

            return;
        }

        $this->logger->warning(sprintf('No confirmation transaction received in over %d hours.', $this->period), [
            'last_transaction' => $transaction->transaction_id,
            'received_at' => $transaction->created_at,
        ]);

        $archive = $this->logArchive->archiveCurrentLog();

        try {
            $this->email->send(
                config('confirmation.email.uptime.recipients'),
                'Confirmation Service Alert',
                'No transactions received',
                sprintf(
                    'No confirmation transaction has been received for more than %s hour(s).%sLast transaction: %s%sReceived at: %s',
                    $this->period,
                    PHP_EOL,
                    $transaction->transaction_id,
                    PHP_EOL,
                    $transaction->created_at,
                ),
                $archive,
            );

            Cache::put($this->cacheKey, true, now()->addHours($this->period));

            $this->logger->info('Confirmation health alert email sent.');
        } finally {
            File::delete($archive);

            $this->logger->info('Temporary log archive deleted.', [
                'archive' => $archive,
            ]);
        }
    }
}
