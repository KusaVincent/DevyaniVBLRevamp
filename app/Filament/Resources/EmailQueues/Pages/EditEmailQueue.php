<?php

namespace App\Filament\Resources\EmailQueues\Pages;

use App\Filament\Resources\EmailQueues\EmailQueueResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEmailQueue extends EditRecord
{
    protected static string $resource = EmailQueueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
