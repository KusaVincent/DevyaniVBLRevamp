<?php

declare(strict_types=1);

namespace App\Filament\Resources\BusinessTills\Pages;

use App\Filament\Resources\BusinessTills\BusinessTillResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Override;

class ListBusinessTills extends ListRecords
{
    #[Override]
    protected static string $resource = BusinessTillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
