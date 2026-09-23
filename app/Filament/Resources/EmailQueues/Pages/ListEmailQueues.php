<?php

declare(strict_types=1);

namespace App\Filament\Resources\EmailQueues\Pages;

use App\Filament\Resources\EmailQueues\EmailQueueResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Override;

class ListEmailQueues extends ListRecords
{
    #[Override]
    protected static string $resource = EmailQueueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
