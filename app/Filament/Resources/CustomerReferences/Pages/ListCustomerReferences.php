<?php

namespace App\Filament\Resources\CustomerReferences\Pages;

use App\Filament\Resources\CustomerReferences\CustomerReferenceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCustomerReferences extends ListRecords
{
    protected static string $resource = CustomerReferenceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
