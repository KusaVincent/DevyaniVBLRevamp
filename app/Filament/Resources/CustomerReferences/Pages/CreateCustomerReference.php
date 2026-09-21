<?php

namespace App\Filament\Resources\CustomerReferences\Pages;

use App\Filament\Resources\CustomerReferences\CustomerReferenceResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomerReference extends CreateRecord
{
    protected static string $resource = CustomerReferenceResource::class;
}
