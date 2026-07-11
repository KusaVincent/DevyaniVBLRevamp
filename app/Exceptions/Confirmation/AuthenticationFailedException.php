<?php

declare(strict_types=1);

namespace App\Exceptions\Confirmation;

final class AuthenticationFailedException extends ConfirmationException
{
    public function __construct(string $message = 'Credentials passed for auth are incorrect. Probably not from the expected source.')
    {
        parent::__construct($message);
    }
}
