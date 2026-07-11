<?php

declare(strict_types=1);

namespace App\Services\Logging;

use App\Data\ConfirmationRequestData;

final class Sanitizer
{
    public static function payload(
        ConfirmationRequestData $payload,
    ): array {
        $data = $payload->toArray();

        foreach (['Username', 'Password', 'Hash'] as $field) {
            if (array_key_exists($field, $data)) {
                $data[$field] = '***';
            }
        }

        return $data;
    }
}
