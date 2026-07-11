<?php

declare(strict_types=1);

namespace App\Exceptions\Confirmation;

final class HashValidationException extends ConfirmationException
{
    public function __construct()
    {
        parent::__construct('Hash comparison failed. Request cannot be trusted.');
    }
}
