<?php

declare(strict_types=1);

namespace App\Filament\Resources\EmailQueues\Pages;

use App\Filament\Resources\EmailQueues\EmailQueueResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Override;

class EditEmailQueue extends EditRecord
{
    #[Override]
    protected static string $resource = EmailQueueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }
}
