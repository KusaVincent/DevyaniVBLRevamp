<?php

namespace App\Filament\Resources\SmsQueues\Pages;

use App\Filament\Resources\SmsQueues\SmsQueueResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSmsQueue extends CreateRecord
{
    protected static string $resource = SmsQueueResource::class;
}
