<?php

declare(strict_types=1);

namespace App\Filament\Resources\CustomerReferences\Pages;

use App\Filament\Resources\CustomerReferences\CustomerReferenceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Override;

class ListCustomerReferences extends ListRecords
{
    #[Override]
    protected static string $resource = CustomerReferenceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
