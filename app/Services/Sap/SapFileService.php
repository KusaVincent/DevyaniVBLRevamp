<?php

declare(strict_types=1);

namespace App\Services\Sap;

use App\Models\BusinessProfile;
use App\Models\ConfirmationTransaction;
use App\Services\Confirmation\ConfirmationService;
use App\Services\Csv\CsvService;
use App\Services\Logging\LoggingService;

final readonly class SapFileService
{
    public function __construct(private CsvService $csv, private LoggingService $logger)
    {
        //
    }

    public function write(ConfirmationTransaction $transaction, BusinessProfile $profile): void
    {
        $this->logger->info('Writing SAP file', [
            'file' => $profile->sapConfiguration()->file(),
            'transaction' => $transaction->transaction_id,
        ]);

        $sap = $profile->sapConfiguration();

        $this->csv->write(
            $sap->file(),
            [
                $sap->row($transaction),
            ],
            $sap->headers(),
        );

        $this->logger->info('Written SAP file', [
            'file' => $profile->sapConfiguration()->file(),
            'transaction' => $transaction->transaction_id,
        ]);
    }
}
