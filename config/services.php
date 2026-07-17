<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */
    'confirmation' => [
        'recipients' => env('TRANSACTION_RECEIVER_CSV_EMAILS'),
    ],

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'celcom' => [
        'url' => env('CELCOM_SMS_URL'),
        'api_key' => env('CELCOM_SMS_API_KEY'),
        'partner_id' => env('CELCOM_SMS_PARTNER_ID'),
        'short_code' => env('CELCOM_SMS_SHORT_CODE'),
        'max_attempts' => env('CELCOM_MAX_ATTEMPTS', 3),
    ],
];
