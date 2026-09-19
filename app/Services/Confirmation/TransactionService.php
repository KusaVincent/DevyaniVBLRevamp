<?php

declare(strict_types=1);

namespace App\Services\Confirmation;

use App\Contracts\Confirmation\TransactionServiceInterface;
use App\Data\ConfirmationRequestData;
use App\Enum\ProcessSMSTxn;
use App\Exceptions\Confirmation\DuplicateTransactionException;
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
        ConfirmationTransaction::create([
            'process' => $process,
            'ft_ref' => $request->ftRef,
            'amount' => $request->amount,
            'narrative' => $request->narrative,
            'customer_name' => $request->customerName,
            'transaction_id' => $request->transactionId,
            'bill_reference' => $request->billReference,
            'transaction_time' => $request->transactionTime,
            'business_short_code' => $request->businessShortCode,
        ]);
    }
}
