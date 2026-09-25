<?php

declare(strict_types=1);

namespace App\Filament\Resources\SmsQueues\Pages;

use App\Filament\Resources\SmsQueues\SmsQueueResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Override;

class ListSmsQueues extends ListRecords
{
    #[Override]
    protected static string $resource = SmsQueueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }
}
