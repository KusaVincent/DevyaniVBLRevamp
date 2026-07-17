<?php

declare(strict_types=1);

namespace App\Contracts\Sms;

use App\Models\SmsQueue;

interface SmsMessageBuilderInterface
{
    public function build(SmsQueue $sms): string;
}
