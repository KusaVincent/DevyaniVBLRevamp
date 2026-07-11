<?php

namespace App\Services\Sms;

use App\Exceptions\Sms\SmsDeliveryException;
use App\Exceptions\Sms\SmsRejectedException;
use App\Services\Logging\LoggingService;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;

final readonly class CelcomSmsService
{
    public function __construct(private LoggingService $logger) {
        //
    }

    /**
     * @throws ConnectionException
     */
    public function send(string $mobile, string $message): array
    {
        $this->logger->info('Preparing to Send SMS', [
            $mobile, $message,
        ]);

        $payload = [
            'count' => 1,
            'smslist' => [[
                'partnerID' => config('services.celcom.partner_id'),
                'apikey' => config('services.celcom.api_key'),
                'pass_type' => 'plain',
                'mobile' => $mobile,
                'message' => $message,
                'shortcode' => config('services.celcom.short_code'),
            ]],
        ];

        $response = Http::acceptJson()
            ->post(
                config('services.celcom.url'),
                $payload,
            );

        $this->logger->info('Prepared SMS data', [
            $payload
        ]);

        if ($response->serverError()) {
            $this->logger->error('SMS gateway unavailable.', [
                $mobile, $response->json()
            ]);

            throw new SmsDeliveryException(
                $mobile,
                $response->json(),
                'SMS gateway unavailable.',
            );
        }

        if ($response->failed()) {
            $this->logger->error('SMS Failed.', [
                $mobile, $response->json('message')
            ]);

            throw new SmsRejectedException(
                $mobile,
                $response->json('message') ?? 'SMS rejected.',
            );
        }

        $this->logger->info('SMS Sent.');

        return $response->json();
    }
}
