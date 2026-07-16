<?php

namespace App\Contracts\Business;

use App\Data\ConfirmationRequestData;
use App\Exceptions\Confirmation\BusinessProfileNotFoundException;
use App\Models\BusinessProfile;

interface BusinessProfileServiceInterface
{
    /**
     * @throws BusinessProfileNotFoundException
     */
    public function find(ConfirmationRequestData $request): BusinessProfile;
}
