<?php

declare(strict_types=1);

namespace App\Contracts\Sms;

interface CelcomSmsServiceInterface
{
    /**
     * @return array<string, mixed>
     */
    public function send(string $mobile, string $message): array;
}
