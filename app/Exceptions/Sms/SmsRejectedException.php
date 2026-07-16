<?php

declare(strict_types=1);

namespace App\Exceptions\Sms;

final class SmsRejectedException extends SmsException
{
    public function __construct(public readonly string $mobile, string $message, public readonly ?array $response = null)
    {
        parent::__construct($message);
    }
}
