<?php

declare(strict_types=1);

namespace App\Contracts\Confirmation;

use App\Data\ConfirmationRequestData;
use App\Exceptions\Confirmation\AuthenticationFailedException;
use App\Models\BusinessProfile;

interface AuthenticationServiceInterface
{
    /**
     * @throws AuthenticationFailedException
     */
    public function authenticate(ConfirmationRequestData $request, BusinessProfile $profile): void;
}
