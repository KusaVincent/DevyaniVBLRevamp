<?php

namespace App\Filament\Resources\SmsQueues\Pages;

use App\Filament\Resources\SmsQueues\SmsQueueResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSmsQueue extends EditRecord
{
    protected static string $resource = SmsQueueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
