<?php

declare(strict_types=1);

namespace App\Filament\Resources\BusinessTills\Pages;

use App\Filament\Resources\BusinessTills\BusinessTillResource;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreateBusinessTill extends CreateRecord
{
    #[Override]
    protected static string $resource = BusinessTillResource::class;
}
