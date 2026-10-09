<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Password & Lockout Security Policies
    |--------------------------------------------------------------------------
    */
    'password' => [
        'expire_days' => (int) env('AUTH_PASSWORD_EXPIRE_DAYS', 30),
        'history_count' => (int) env('AUTH_PASSWORD_HISTORY_COUNT', 3),
        'reminder_days' => (int) env('AUTH_PASSWORD_REMINDER_DAYS', 7),
    ],

    'lockout' => [
        'max_failed_attempts' => (int) env('AUTH_MAX_FAILED_ATTEMPTS', 3),
        'inactivity_days' => (int) env('AUTH_INACTIVITY_LOCKOUT_DAYS', 30),
    ],

    'defaults' => [
        'generate_random_password' => (bool) env('AUTH_GENERATE_RANDOM_PASSWORD', true),
        'generic_password' => env('AUTH_GENERIC_PASSWORD', 'ChangeMe2026!#'),
    ],
];
