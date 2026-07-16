<?php

declare(strict_types=1);

namespace App\Services\Confirmation;

use App\Contracts\Confirmation\AuthenticationServiceInterface;
use App\Models\BusinessProfile;
use App\Data\ConfirmationRequestData;
use App\Exceptions\Confirmation\AuthenticationFailedException;

final readonly class AuthenticationService implements AuthenticationServiceInterface
{
    /**
     * @throws AuthenticationFailedException
     */
    public function authenticate(ConfirmationRequestData $request, BusinessProfile $profile): void
    {
        if (! $profile->credentialsMatch($request->username, $request->password)) {
            throw new AuthenticationFailedException();
        }
    }
}
