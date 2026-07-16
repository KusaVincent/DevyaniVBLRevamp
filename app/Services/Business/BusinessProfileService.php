<?php

declare(strict_types=1);

namespace App\Services\Business;

use App\Contracts\Business\BusinessProfileServiceInterface;
use App\Data\ConfirmationRequestData;
use App\Enum\BusinessProfileStatus;
use App\Exceptions\Confirmation\BusinessProfileNotFoundException;
use App\Models\BusinessProfile;

final readonly class BusinessProfileService implements BusinessProfileServiceInterface
{
    /**
     * @throws BusinessProfileNotFoundException
     */
    public function find(ConfirmationRequestData $request): BusinessProfile {
        return $this->findByShortCode($request->businessShortCode);
    }

    /**
     * @throws BusinessProfileNotFoundException
     */
    public function findByShortCode(string $businessShortCode): BusinessProfile {
        $profile = BusinessProfile::query()
            ->where('business_short_code', $businessShortCode)
            ->where('active', BusinessProfileStatus::YES)
            ->first();

        if ($profile instanceof BusinessProfile) {
            return $profile;
        }

        throw new BusinessProfileNotFoundException($businessShortCode);
    }
}
