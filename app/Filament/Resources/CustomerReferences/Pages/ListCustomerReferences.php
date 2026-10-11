<?php

declare(strict_types=1);

namespace App\Filament\Resources\CustomerReferences\Pages;

use App\Filament\Imports\CustomerReferenceImporter;
use App\Filament\Resources\CustomerReferences\CustomerReferenceResource;
use Filament\Actions\CreateAction;
use Filament\Actions\ImportAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Icons\Heroicon;
use Override;

class ListCustomerReferences extends ListRecords
{
    #[Override]
    protected static string $resource = CustomerReferenceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ImportAction::make()
                ->importer(CustomerReferenceImporter::class)
                ->label('Import SMS Details Maintenance')
                ->icon(Heroicon::OutlinedArrowUpTray),
            CreateAction::make(),
        ];
    }
}
