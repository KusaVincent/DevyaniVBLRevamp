<?php

namespace App\Filament\Resources\ConfirmationTransactions\Pages;

use App\Filament\Resources\ConfirmationTransactions\ConfirmationTransactionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListConfirmationTransactions extends ListRecords
{
    protected static string $resource = ConfirmationTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
//            CreateAction::make(),
        ];
    }
}
