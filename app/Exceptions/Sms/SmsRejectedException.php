<?php

declare(strict_types=1);

namespace App\Exceptions\Sms;

final class SmsRejectedException extends SmsException
{
    public function __construct(
        public readonly string $mobile,
        string $message,
    ) {
        parent::__construct($message);
    }
}
