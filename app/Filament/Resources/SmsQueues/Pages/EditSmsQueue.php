<?php

declare(strict_types=1);

namespace App\Filament\Resources\SmsQueues\Pages;

use App\Filament\Resources\SmsQueues\SmsQueueResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Override;

class EditSmsQueue extends EditRecord
{
    #[Override]
    protected static string $resource = SmsQueueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
