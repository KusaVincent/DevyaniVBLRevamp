<?php

declare(strict_types=1);

namespace App\Filament\Resources\BusinessProfiles\Pages;

use App\Filament\Resources\BusinessProfiles\BusinessProfileResource;
use Filament\Resources\Pages\EditRecord;
use Override;

class EditBusinessProfile extends EditRecord
{
    #[Override]
    protected static string $resource = BusinessProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }
}
