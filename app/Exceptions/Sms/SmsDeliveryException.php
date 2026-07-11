<?php

declare(strict_types=1);

namespace App\Exceptions\Sms;

final class SmsDeliveryException extends SmsException
{
    public function __construct(
        public readonly string $mobile,
        public readonly ?array $response = null,
        string $message = 'Failed to send SMS.',
        int $code = 0,
        ?\Throwable $previous = null,
    ) {
        parent::__construct($message, $code, $previous);
    }
}
