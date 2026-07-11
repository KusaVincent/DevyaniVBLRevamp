<?php

declare(strict_types=1);

namespace App\Services\Business;

use App\Data\ConfirmationRequestData;
use App\Enum\BusinessProfileStatus;
use App\Enum\ProcessSMSTxn;
use App\Exceptions\Confirmation\BusinessProfileNotFoundException;
use App\Models\BusinessProfile;
use Illuminate\Support\Facades\Cache;

final readonly class BusinessProfileService
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
