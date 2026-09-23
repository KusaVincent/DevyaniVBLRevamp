<?php

declare(strict_types=1);

namespace App\Filament\Resources\CustomerReferences\Pages;

use App\Filament\Resources\CustomerReferences\CustomerReferenceResource;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreateCustomerReference extends CreateRecord
{
    #[Override]
    protected static string $resource = CustomerReferenceResource::class;
}
