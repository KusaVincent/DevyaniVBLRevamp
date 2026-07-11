<?php

namespace App\Services\Sms;

use App\Exceptions\Sms\SmsDeliveryException;
use App\Exceptions\Sms\SmsRejectedException;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;

final readonly class CelcomSmsService
{
    /**
     * @throws ConnectionException
     */
    public function send(string $mobile, string $message): array
    {

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

        if ($response->serverError()) {
            throw new SmsDeliveryException(
                $mobile,
                $response->json(),
                'SMS gateway unavailable.',
            );
        }

        if ($response->failed()) {
            throw new SmsRejectedException(
                $mobile,
                $response->json('message') ?? 'SMS rejected.',
            );
        }

        return $response->json();
    }
}
