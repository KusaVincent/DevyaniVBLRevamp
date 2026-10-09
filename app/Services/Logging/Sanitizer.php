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
        // Windows absolute paths: C:\path\to\file.ext -> C:\***\file***
        $text = preg_replace(
            '#(?<!\w)([A-Za-z]:[\\\\/])(?:[^\s"\'<>|,:;]+[\\\\/])+(?=[^\s"\'<>|,:;]+)([^\\\\/\s"\'<>|,:;.]+)(?:\.[^\s"\'<>|,:;]+)?#',
            '$1***\\$2***',
            $text
        );

        // UNC network paths: \\server\share\path\file.ext -> \\***\file***
        $text = preg_replace(
            '#(\\\\\\\\)(?:[^\s"\'<>|,:;]+[\\\\/])+(?=[^\s"\'<>|,:;]+)([^\\\\/\s"\'<>|,:;.]+)(?:\.[^\s"\'<>|,:;]+)?#',
            '$1***\\$2***',
            (string) $text
        );

        // Unix absolute paths: /var/log/app/file.ext -> /*** /file***
        $text = preg_replace(
            '#(?<![\w:])/(?:[A-Za-z0-9._-]+/)+(?=[A-Za-z0-9._-]+)([A-Za-z0-9_-]+)(?:\.[A-Za-z0-9._-]+)?#',
            '/***$1***',
            (string) $text
        );

        $sensitiveFields = [
            'apikey',
            'partnerID',
            'mobile',
        ];

        foreach ($sensitiveFields as $field) {

            $fieldPattern = preg_quote($field, '/');

            $text = preg_replace(
                '/("'.$fieldPattern.'"\s*:\s*)"[^"]*"/i',
                '$1"***"',
                (string) $text
            );

            $text = preg_replace(
                '/(\b'.$fieldPattern.'\b\s*[=:]\s*)([^\s,|}&]+)/i',
                '$1***',
                (string) $text
            );
        }

        return $text;
    }
}
