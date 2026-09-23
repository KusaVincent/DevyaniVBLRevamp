<?php

declare(strict_types=1);

namespace App\Filament\Resources\BusinessProfiles\Pages;

use App\Filament\Resources\BusinessProfiles\BusinessProfileResource;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreateBusinessProfile extends CreateRecord
{
    #[Override]
    protected static string $resource = BusinessProfileResource::class;
}
