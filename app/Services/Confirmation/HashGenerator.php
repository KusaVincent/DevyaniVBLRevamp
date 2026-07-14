<?php

declare(strict_types=1);

namespace App\Services\Confirmation;

use App\Data\ConfirmationRequestData;
use App\Models\BusinessProfile;

final readonly class HashGenerator
{
    public function generate(ConfirmationRequestData $request, BusinessProfile $profile): string
    {
        $payload = implode('', [
            $profile->secret_key,
            $request->transactionType,
            $request->transactionId,
            $request->transactionTime,
            $request->amount,
            $profile->credit_account,
            $request->billReference,
            $request->mobile,
            $request->customerName,
            1,
        ]);

        return base64_encode(
            hash('sha256', $payload)
        );
    }
}
