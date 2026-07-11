<?php

declare(strict_types=1);

namespace App\Services\Confirmation;

use App\Data\ConfirmationRequestData;
use App\Exceptions\Confirmation\HashValidationException;
use App\Models\BusinessProfile;
use App\Services\Logging\LoggingService;

final readonly class HashValidationService
{
    public function __construct(private LoggingService $logger)
    {
        //
    }

    /**
     * @throws HashValidationException
     */
    public function validate(ConfirmationRequestData $request, BusinessProfile $profile): void
    {
        $generatedHash = $this->generateHash($request,$profile);

        if ($generatedHash === $request->hash) {
            return;
        }

        $this->logger->error(
            'HASH_MISMATCH',
            [
                'transaction_id' => $request->transactionId,
                'generated' => $generatedHash,
                'received' => $request->hash,
            ],
        );

        throw new HashValidationException();
    }

    private function generateHash(ConfirmationRequestData $request, BusinessProfile $profile): string
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
