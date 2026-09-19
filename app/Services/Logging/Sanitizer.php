<?php

declare(strict_types=1);

namespace App\Services\Logging;

use App\Data\ConfirmationRequestData;

/**
 * @phpstan-import-type ConfirmationPayload from ConfirmationRequestData
 */
final class Sanitizer
{
    /**
     * @return array<string, mixed>
     */
    public static function payload(ConfirmationRequestData $payload): array
    {
        $data = $payload->toArray();

        foreach (['Username', 'Password', 'Hash'] as $field) {
            if (array_key_exists($field, $data)) {
                $data[$field] = '***';
            }
        }

        return $data;
    }

    public static function sanitizeSensitivePaths(string $text): string
    {
        $text = preg_replace(
            '#(?<![A-Za-z0-9_])([A-Za-z]:[\\\\/])(?:[^\\s"\'<>|,:;]+[\\\\/])*[^\\s"\'<>|,:;]+#',
            '***',
            $text
        );

        $text = preg_replace(
            '#\\\\\\\\[^\\s"\'<>|,:;]+(?:\\\\[^\\s"\'<>|,:;]+)+#',
            '***',
            $text
        );

        $text = preg_replace(
            '#(?<![\w:])/(?:[A-Za-z0-9._-]+/)+[A-Za-z0-9._-]+#',
            '***',
            $text
        );

        $sensitiveFields = [
            'apikey',
            'partnerID',
            'mobile',
        ];

        foreach ($sensitiveFields as $field) {

            $fieldPattern = preg_quote($field, '/');

            $text = preg_replace(
                '/("' . $fieldPattern . '"\s*:\s*)"[^"]*"/i',
                '$1"***"',
                $text
            );

            $text = preg_replace(
                '/(\b' . $fieldPattern . '\b\s*[=:]\s*)([^\s,|}&]+)/i',
                '$1***',
                $text
            );
        }

        return $text;
    }
}
