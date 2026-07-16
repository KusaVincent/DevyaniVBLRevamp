<?php

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
