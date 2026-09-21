<?php

namespace App\Filament\Resources\BusinessTills\Pages;

use App\Filament\Resources\BusinessTills\BusinessTillResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBusinessTills extends ListRecords
{
    protected static string $resource = BusinessTillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
