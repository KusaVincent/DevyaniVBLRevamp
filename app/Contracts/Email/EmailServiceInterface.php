<?php

declare(strict_types=1);

namespace App\Contracts\Email;

interface EmailServiceInterface
{
    public function send(
        array $recipients,
        string $subject,
        string $header,
        string $message,
        ?string $attachment = null,
    ): void;
}
