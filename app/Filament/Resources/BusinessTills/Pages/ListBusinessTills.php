<?php

declare(strict_types=1);

namespace App\Filament\Resources\BusinessTills\Pages;

use App\Filament\Imports\BusinessTillImporter;
use App\Filament\Resources\BusinessTills\BusinessTillResource;
use Filament\Actions\CreateAction;
use Filament\Actions\ImportAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Icons\Heroicon;
use Override;

class ListBusinessTills extends ListRecords
{
    #[Override]
    protected static string $resource = BusinessTillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ImportAction::make()
                ->importer(BusinessTillImporter::class)
                ->label('Import Tills')
                ->icon(Heroicon::OutlinedArrowUpTray),
            CreateAction::make(),
        ];
    }
}
