<?php

declare(strict_types=1);

namespace App\Filament\Resources\ConfirmationTransactions\Pages;

use App\Filament\Resources\ConfirmationTransactions\ConfirmationTransactionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Override;

final class EditConfirmationTransaction extends EditRecord
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
