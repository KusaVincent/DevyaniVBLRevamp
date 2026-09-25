<?php

declare(strict_types=1);

namespace App\Filament\Resources\BusinessTills\Pages;

use App\Filament\Resources\BusinessTills\BusinessTillResource;
use Filament\Resources\Pages\EditRecord;
use Override;

class EditBusinessTill extends EditRecord
{
    #[Override]
    protected static string $resource = BusinessTillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }
}
