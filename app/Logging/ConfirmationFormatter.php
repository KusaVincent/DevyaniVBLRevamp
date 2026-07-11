<?php

declare(strict_types=1);

namespace App\Logging;

use JsonException;
use Monolog\Formatter\FormatterInterface;
use Monolog\Formatter\LineFormatter;
use Monolog\LogRecord;

final class ConfirmationFormatter extends LineFormatter implements FormatterInterface
{
    /**
     * @throws JsonException
     */
    public function format(LogRecord $record): string
    {
        $context = $record->context;
        $message = $record->message;

        unset(
            $context['uuid'],
            $context['ip'],
            $context['file'],
            $context['line'],
            $context['function'],
        );

        if ($context !== []) {
            $message .= ': ' . json_encode(
                $context,
                JSON_UNESCAPED_SLASHES
                | JSON_UNESCAPED_UNICODE
                | JSON_UNESCAPED_LINE_TERMINATORS
                | JSON_THROW_ON_ERROR
            );
        }

        return implode('|', [
                $record->datetime->format('Y-m-d H:i:s'),
                $record->extra['uuid']
                    ?? $record->context['uuid']
                    ?? '',
                strtoupper($record->level->getName()),
                $record->extra['file']
                    ?? $record->context['file']
                    ?? '',
                isset($record->extra['function'])
                    ? $record->extra['function'] . '()'
                    : (
                        isset($record->context['function'])
                            ? $record->context['function'] . '()'
                            : ''
                    ),
                $record->extra['ip']
                    ?? $record->context['ip']
                    ?? '',
                $record->extra['line']
                    ?? $record->context['line']
                    ?? '',
                $message,
            ]) . PHP_EOL;
    }

    public function formatBatch(array $records): string
    {
        return implode(
            '',
            array_map(
                $this->format(...),
                $records,
            ),
        );
    }
}
