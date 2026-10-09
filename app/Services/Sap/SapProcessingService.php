<?php

declare(strict_types=1);

namespace App\Services\Sap;

use App\Contracts\Sap\SapProcessingServiceInterface;
use App\Enum\ProcessSMSTxn;
use App\Enum\Status;
use App\Models\ConfirmationTransaction;
use App\Models\EmailQueue;
use App\Services\Business\BusinessProfileService;
use App\Services\Logging\LoggingService;

final readonly class SapProcessingService implements SapProcessingServiceInterface
{
    public function __construct(private SapFileService $sap, private BusinessProfileService $profiles, private LoggingService $logger)
    {
        //
    }

    public function processPending(): void
    {
        ConfirmationTransaction::query()
            ->where('status', Status::PENDING)
            ->where('process', ProcessSMSTxn::YES)
            ->orderBy('id')
            ->chunkById(100, function ($transactions): void {
                foreach ($transactions as $transaction) {
                    $profile = $this->profiles->findByShortCode($transaction->business_short_code);
                    $file = storage_path($profile->sapConfiguration()->file());

                    $fileAlreadyExists = file_exists($file);

                    $this->sap->write($transaction, $profile);

                    $transaction->update([
                        'status' => Status::PROCESSED,
                    ]);

                    if ($fileAlreadyExists) {
                        $this->logger->info('Appended to SAP file. Skipped queuing email as job already queued for existing file', [
                            'file' => $file,
                            'transaction' => $transaction->transaction_id,
                        ]);

                        continue;
                    }

                    EmailQueue::create([
                        'message' => '.',
                        'attachment' => $file,
                        'subject' => 'NCBA M-Pesa C2B',
                        'header' => 'NCBA M-Pesa C2B',
                        'recipients' => config('confirmation.email.recipients'),
                    ]);

                    $this->logger->info('Created new SAP file and queued email', [
                        'file' => $profile->sapConfiguration()->file(),
                        'transaction' => $transaction->transaction_id,
                    ]);
                }
            });
    }
}
