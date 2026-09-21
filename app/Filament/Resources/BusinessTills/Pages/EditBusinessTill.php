<?php

namespace App\Filament\Resources\BusinessTills\Pages;

use App\Filament\Resources\BusinessTills\BusinessTillResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBusinessTill extends EditRecord
{
    protected static string $resource = BusinessTillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
