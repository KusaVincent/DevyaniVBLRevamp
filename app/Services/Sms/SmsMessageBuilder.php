<?php

declare(strict_types=1);

namespace App\Services\Sms;

use App\Contracts\Sms\SmsMessageBuilderInterface;
use App\Models\SmsQueue;

final class SmsMessageBuilder implements SmsMessageBuilderInterface
{
    public function build(SmsQueue $sms): string
    {
        return sprintf(
            'Dear %s, Payment for %s of KES %s received from %s at %s. Mpesa reference: %s.',
            $sms->recipient_name,
            $sms->bill_reference,
            number_format($sms->amount, 2),
            $sms->customer_name,
            $sms->created_at->format('d-m-Y h:i A'),
            $sms->mpesa_ref,
        );
    }
}
