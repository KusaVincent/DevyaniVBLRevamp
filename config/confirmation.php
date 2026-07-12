<?php
return [
    'authenticate' => env('CONFIRMATION_AUTHENTICATE', true),

    'email' => [
        'recipients' => collect(explode(',', env('CONFIRMATION_EMAIL_RECIPIENTS', '')))
            ->map(fn ($email) => trim($email))
            ->filter()
            ->values()
            ->all(),
        'uptime' => [
            'recipients' => collect(explode(',', env('CONFIRMATION_UPTIME_EMAIL_RECIPIENTS', '')))
                ->map(fn ($email) => trim($email))
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
];
