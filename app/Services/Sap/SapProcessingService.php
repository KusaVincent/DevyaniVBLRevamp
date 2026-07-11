<?php

namespace App\Services\Sap;

use App\Enum\ProcessSMSTxn;
use App\Enum\Status;
use App\Models\ConfirmationTransaction;
use App\Models\EmailQueue;
use App\Services\Business\BusinessProfileService;

final readonly class SapProcessingService
{
    public function __construct(
        private SapFileService $sap,
        private BusinessProfileService $profiles,
    ) {}

    public function processPending(): void
    {
        ConfirmationTransaction::query()
            ->where('status', Status::PENDING)
            ->where('process', ProcessSMSTxn::YES)
            ->orderBy('id')
            ->chunkById(100, function ($transactions) {
                foreach ($transactions as $transaction) {
                    $profile = $this->profiles->findByShortCode($transaction->business_short_code);

                    $this->sap->write($transaction,$profile);

                    $transaction->update([
                        'status' => Status::PROCESSED,
                    ]);

                    $file = storage_path($profile->sapConfiguration()->file());

                    EmailQueue::create([
                        'message' => '.',
                        'attachment' => $file,
                        'subject' => 'NCBA M-Pesa C2B',
                        'header' => 'NCBA M-Pesa C2B',
                        'recipients' => config('confirmation.email.recipients'),
                    ]);
                }
            });
    }
}
