<?php

declare(strict_types=1);

namespace App\Logging;

use App\Services\Logging\Sanitizer;
use JsonException;
use Monolog\Formatter\FormatterInterface;
use Monolog\Formatter\LineFormatter;
use Monolog\LogRecord;
use Override;

final class ConfirmationFormatter extends LineFormatter implements FormatterInterface
{
    /**
     * @throws JsonException
     */
    #[Override]
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
            $message .= ': '.json_encode(
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
            mb_strtoupper($record->level->getName()),
            $record->extra['ip']
                ?? $record->context['ip']
                ?? '',
            $record->extra['line']
                ?? $record->context['line']
                ?? '',
            Sanitizer::sanitizeSensitivePaths($message),
        ]).PHP_EOL;
    }

    #[Override]
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
