<?php

declare(strict_types=1);

namespace App\Services\Logging;

use App\Contracts\Logging\LoggingServiceInterface;
use Illuminate\Support\Facades\Log;

final class LoggingService implements LoggingServiceInterface
{
    /**
     * @param array<string, mixed> $context
     */
    public function info(string $message, array $context = []): void
    {
        $this->write('info', $message, $context);
    }

    /**
     * @param array<string, mixed> $context
     */
    public function error(string $message, array $context = []): void
    {
        $this->write('error', $message, $context);
    }

    /**
     * @param array<string, mixed> $context
     */
    public function debug(string $message, array $context = []): void
    {
        $this->write('debug', $message, $context);
    }

    /**
     * @param array<string, mixed> $context
     */
    public function notice(string $message, array $context = []): void
    {
        $this->write('notice', $message, $context);
    }

    /**
     * @param array<string, mixed> $context
     */
    public function warning(string $message, array $context = []): void
    {
        $this->write('warning', $message, $context);
    }

    /**
     * @param array<string, mixed> $context
     */
    private function write(string $level, string $message, array $context = []): void
    {
        $ip     = null;
        $uuid = 'console';

        $trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 3);

        $caller = $trace[2] ?? [];

        if (! app()->runningInConsole()) {
            $ip = request()->ip();
            $uuid = str_replace('-', '', request()->attributes->get('request_uuid'));
        }

        $context += [
            'ip' => $ip,
            'uuid' => $uuid,
            'file' => $caller['file'] ?? null,
            'line' => $caller['line'] ?? null,
            'function' => $caller['function'] ?? null,
        ];

        Log::channel('confirmation')
            ->{$level}($message, $context);
    }
}
