<?php

declare(strict_types=1);

namespace App\Filament\Resources\ConfirmationTransactions\Pages;

use App\Filament\Resources\ConfirmationTransactions\ConfirmationTransactionResource;
use Filament\Resources\Pages\CreateRecord;

final class CreateConfirmationTransaction extends CreateRecord
{
    #[\Override]
    protected static string $resource = ConfirmationTransactionResource::class;
}
