<?php
return [
    'authenticate' => env('CONFIRMATION_AUTHENTICATE', true),

    'email' => [
        'recipients' => collect(explode(',', env('CONFIRMATION_EMAIL_RECIPIENTS', '')))
            ->map(fn ($email) => trim($email))
            ->filter()
            ->values()
            ->all(),
    ],
];
