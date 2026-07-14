<?php

declare(strict_types=1);

namespace App\Contracts\Logging;

interface LoggingServiceInterface
{
    public function info(string $message, array $context = []): void;

    public function notice(string $message, array $context = []): void;

    public function warning(string $message, array $context = []): void;

    public function error(string $message, array $context = []): void;
}
