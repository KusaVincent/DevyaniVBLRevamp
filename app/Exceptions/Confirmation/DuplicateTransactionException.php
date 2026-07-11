<?php

declare(strict_types=1);

namespace App\Exceptions\Confirmation;

final class DuplicateTransactionException extends ConfirmationException
{
    public function __construct(public readonly string $transactionId)
    {
        parent::__construct("Duplicate transaction detected: {$transactionId}");
    }
}
