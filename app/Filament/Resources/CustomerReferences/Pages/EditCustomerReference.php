<?php

declare(strict_types=1);

namespace App\Filament\Resources\CustomerReferences\Pages;

use App\Filament\Resources\CustomerReferences\CustomerReferenceResource;
use Filament\Resources\Pages\EditRecord;
use Override;

class EditCustomerReference extends EditRecord
{
    #[Override]
    protected static string $resource = CustomerReferenceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }
}
