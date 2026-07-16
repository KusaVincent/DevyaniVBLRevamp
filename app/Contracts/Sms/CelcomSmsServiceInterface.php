<?php

namespace App\Contracts\Sms;

interface CelcomSmsServiceInterface
{
    public function send(string $mobile, string $message): array;
}
