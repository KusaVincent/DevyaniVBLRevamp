<?php

declare(strict_types=1);

namespace App\Exceptions\Email;

use Throwable;

final class EmailDeliveryException extends EmailException
{
    public function __construct(
        public readonly string $recipient,
        public readonly ?array $response = null,
        string $message = 'Failed to deliver email.',
        int $code = 0,
        ?Throwable $previous = null,
    ) {
        parent::__construct($message, $code, $previous);
    }
}
