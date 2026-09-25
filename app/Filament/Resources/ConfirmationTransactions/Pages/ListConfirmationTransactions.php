<?php

declare(strict_types=1);

namespace App\Filament\Resources\ConfirmationTransactions\Pages;

use App\Filament\Resources\ConfirmationTransactions\ConfirmationTransactionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Override;

final class ListConfirmationTransactions extends ListRecords
{
    #[Override]
    protected static string $resource = ConfirmationTransactionResource::class;

    #[Override]
    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }
}
