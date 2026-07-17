<?php

declare(strict_types=1);

namespace App\Contracts\Sms;

interface SmsProcessingServiceInterface
{
    public function processPending(): void;
}
