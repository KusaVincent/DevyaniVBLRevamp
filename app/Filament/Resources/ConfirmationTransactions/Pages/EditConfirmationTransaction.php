<?php

namespace App\Filament\Resources\ConfirmationTransactions\Pages;

use App\Filament\Resources\ConfirmationTransactions\ConfirmationTransactionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditConfirmationTransaction extends EditRecord
{
    protected static string $resource = ConfirmationTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
//            DeleteAction::make(),
        ];
    }
}
