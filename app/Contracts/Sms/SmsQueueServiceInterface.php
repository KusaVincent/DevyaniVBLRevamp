<?php

declare(strict_types=1);

namespace App\Contracts\Sms;

use App\Data\ConfirmationRequestData;
use App\Enum\ProcessSMSTxn;

interface SmsQueueServiceInterface
{
    public function queue(ConfirmationRequestData $request, ProcessSMSTxn $post = ProcessSMSTxn::YES): void;
}
