<?php

declare(strict_types=1);

namespace App\Contracts\Confirmation;

use App\Data\ConfirmationRequestData;
use App\Exceptions\Confirmation\HashValidationException;
use App\Models\BusinessProfile;

interface HashValidationServiceInterface
{
    /**
     * @throws HashValidationException
     */
    public function validate(ConfirmationRequestData $request, BusinessProfile $profile): void;
}
