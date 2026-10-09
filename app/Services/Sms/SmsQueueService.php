<?php

declare(strict_types=1);

namespace App\Services\Sms;

use App\Contracts\Sms\SmsQueueServiceInterface;
use App\Data\ConfirmationRequestData;
use App\Enum\ProcessSMSTxn;
use App\Enum\Status;
use App\Models\CustomerReference;
use App\Models\SmsQueue;
use App\Services\Logging\LoggingService;
use Illuminate\Support\Carbon;

final readonly class SmsQueueService implements SmsQueueServiceInterface
{
    public function __construct(private LoggingService $logger)
    {
        //
    }

    public function queue(ConfirmationRequestData $request, ProcessSMSTxn $post = ProcessSMSTxn::YES): void
    {
        $recipient = CustomerReference::query()
            ->where('reference', $request->billReference)
            ->first();

        if ($recipient === null) {
            $this->logger->info($request->billReference.' is not maintained for SMS');

            return;
        }

        $this->logger->info($request->billReference.' maintained for SMS, proceeding to add to SMS Queue');

        SmsQueue::create([
            'process' => $post,
            'status' => Status::PENDING,

            'customer_name' => $request->customerName,

            'recipient_name' => $recipient->name,
            'recipient_mobile' => $recipient->mobile,

            'amount' => $request->amount,
            'mpesa_ref' => $request->transactionId,
            'bill_reference' => $request->billReference,

            'created_at' => $request->createdAt ?? Carbon::createFromFormat('YmdHis', (string)$request->transactionTime) ?? now(),
        ]);
    }
}
