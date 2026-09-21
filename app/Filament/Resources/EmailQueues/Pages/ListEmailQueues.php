<?php

namespace App\Filament\Resources\EmailQueues\Pages;

use App\Filament\Resources\EmailQueues\EmailQueueResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEmailQueues extends ListRecords
{
    protected static string $resource = EmailQueueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
