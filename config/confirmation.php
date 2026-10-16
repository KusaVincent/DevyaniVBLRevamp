<?php

declare(strict_types=1);

return [
    'authenticate' => env('CONFIRMATION_AUTHENTICATE', true),

    'email' => [
        'recipients' => collect(explode(',', (string) env('CONFIRMATION_EMAIL_RECIPIENTS', '')))
            ->map(fn ($email): string => mb_trim((string) $email))
            ->filter()
            ->values()
            ->all(),
        'uptime' => [
            'recipients' => collect(explode(',', (string) env('CONFIRMATION_UPTIME_EMAIL_RECIPIENTS', '')))
                ->map(fn ($email): string => mb_trim((string) $email))
                ->filter()
                ->values()
                ->all(),
        ],
    ],

    'cache' => [
        'key' => env('CONFIRMATION_CACHE_KEY', 'confirmation-alert-sent'),
    ],

    'health' => [
        'check' => [
            'period' => env('CONFIRMATION_HEALTH_CHECK_PERIOD', 3),
        ],
    ],
    'sap' => [
        'path' => env('CONFIRMATION_SAP_PATH', ''),
        'processed_path' => env('CONFIRMATION_PROCESSED_SAP_PATH', ''),
        'appended_name' => env('CONFIRMATION_SAP_APPENDED_NAME', '_C2B.csv'),
    ],
];
