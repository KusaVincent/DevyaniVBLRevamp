<?php

namespace App\Contracts\Sms;

interface SmsProcessingServiceInterface
{
    public function processPending(): void;
}
