<?php

declare(strict_types=1);

namespace App\Services\Logging;

use Illuminate\Support\Facades\Log;

final class LoggingService
{
    public function info(string $message, array $context = []): void
    {
        $this->write('info', $message, $context);
    }

    public function error(string $message, array $context = []): void
    {
        $this->write('error', $message, $context);
    }

    public function debug(string $message, array $context = []): void
    {
        $this->write('debug', $message, $context);
    }

    public function notice(string $message, array $context = []): void
    {
        $this->write('notice', $message, $context);
    }

    private function write(string $level, string $message, array $context = [],): void
    {
        $uuid = 'console';

        $trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 3);

        $caller = $trace[2] ?? [];

        if (!app()->runningInConsole()) {
            $uuid = str_replace('-','', request()?->attributes->get('request_uuid'));
        }

        $context += [
            'uuid'     => $uuid,
            'ip'       => request()?->ip(),
            'file' => $caller['file'] ?? null,
            'line' => $caller['line'] ?? null,
            'function' => $caller['function'] ?? null,
        ];

        Log::channel('confirmation')
            ->{$level}($message,$context);
    }
}
