<?php

return [
    'authenticate' => env('CONFIRMATION_AUTHENTICATE', true),

    'email' => [
        'recipients' => collect(explode(',', (string) env('CONFIRMATION_EMAIL_RECIPIENTS', '')))
            ->map(fn ($email): string => trim((string) $email))
            ->filter()
            ->values()
            ->all(),
        'uptime' => [
            'recipients' => collect(explode(',', (string) env('CONFIRMATION_UPTIME_EMAIL_RECIPIENTS', '')))
                ->map(fn ($email): string => trim((string) $email))
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
    ],
];
