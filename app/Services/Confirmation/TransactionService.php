<?php

declare(strict_types=1);

namespace App\Services\Confirmation;

use App\Contracts\Confirmation\TransactionServiceInterface;
use App\Data\ConfirmationRequestData;
use App\Enum\BusinessProfileType;
use App\Enum\ProcessSMSTxn;
use App\Exceptions\Confirmation\DuplicateTransactionException;
use App\Models\BusinessProfile;
use App\Models\ConfirmationTransaction;

final readonly class TransactionService implements TransactionServiceInterface
{
    /**
     * @throws DuplicateTransactionException
     */
    public function ensureNotDuplicate(ConfirmationRequestData $request): void
    {
        if (ConfirmationTransaction::where('transaction_id', $request->transactionId)->exists()) {
            throw new DuplicateTransactionException($request->transactionId);
        }
    }

    public function store(ConfirmationRequestData $request, ProcessSMSTxn $process): void
    {
        $profile = BusinessProfile::where('business_short_code', $request->businessShortCode)->first();

        $billReference = $request->billReference;
        $suppliedTill = null;

        if ($profile !== null && $profile->type === BusinessProfileType::NCBA_TILL) {
            $suppliedTill = $request->billReference;

            $till = $profile->tills()
                ->where('till', $request->billReference)
                ->first();

            if ($till !== null && ! empty($till->cust_code)) {
                $billReference = $till->cust_code;
            } else {
                $process = ProcessSMSTxn::NO;
            }
        }

        ConfirmationTransaction::create([
            'process' => $process,
            'ft_ref' => $request->ftRef,
            'amount' => $request->amount,
            'supplied_till' => $suppliedTill,
            'narrative' => $request->narrative,
            'bill_reference' => $billReference,
            'customer_name' => $request->customerName,
            'transaction_id' => $request->transactionId,
            'transaction_time' => $request->transactionTime,
            'business_short_code' => $request->businessShortCode,
        ]);
    }
}
