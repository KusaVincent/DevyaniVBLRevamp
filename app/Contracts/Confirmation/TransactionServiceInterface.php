<?php

declare(strict_types=1);

namespace App\Contracts\Confirmation;

use App\Data\ConfirmationRequestData;
use App\Enum\ProcessSMSTxn;
use App\Exceptions\Confirmation\DuplicateTransactionException;

interface TransactionServiceInterface
{
    /**
     * @throws DuplicateTransactionException
     */
    public function ensureNotDuplicate(ConfirmationRequestData $request): void;

    public function store(ConfirmationRequestData $request, ProcessSMSTxn $process): void;
}
