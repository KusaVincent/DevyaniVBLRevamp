<?php

declare(strict_types=1);

namespace App\Exceptions\Confirmation;

final class AuthenticationFailedException extends ConfirmationException
{
    public function __construct()
    {
        parent::__construct(
            'Credentials passed for auth are incorrect. Probably not from the expected source.'
        );
    }
}
