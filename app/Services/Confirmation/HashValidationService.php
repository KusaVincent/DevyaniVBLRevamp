<?php

declare(strict_types=1);

namespace App\Services\Confirmation;

use App\Contracts\Confirmation\HashValidationServiceInterface;
use App\Data\ConfirmationRequestData;
use App\Exceptions\Confirmation\HashValidationException;
use App\Models\BusinessProfile;
use App\Services\Logging\LoggingService;

final readonly class HashValidationService implements HashValidationServiceInterface
{
    public function __construct(private HashGenerator $generator, private LoggingService $logger)
    {
        //
    }

    /**
     * @throws HashValidationException
     */
    public function validate(ConfirmationRequestData $request, BusinessProfile $profile): void
    {
        $generatedHash = $this->generator->generate($request, $profile);

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

        throw new HashValidationException;
    }
}
