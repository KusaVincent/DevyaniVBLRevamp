<?php

declare(strict_types=1);

namespace App\Exceptions\Confirmation;

final class InvalidPayloadException extends ConfirmationException
{
    public function __construct(string $message = 'Invalid JSON payload.')
    {
        parent::__construct($message);
    }
}
