<?php

declare(strict_types=1);

namespace App\Filament\Resources\SmsQueues\Pages;

use App\Filament\Resources\SmsQueues\SmsQueueResource;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreateSmsQueue extends CreateRecord
{
    #[Override]
    protected static string $resource = SmsQueueResource::class;
}
