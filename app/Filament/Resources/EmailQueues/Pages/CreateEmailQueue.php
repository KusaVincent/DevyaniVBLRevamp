<?php

namespace App\Filament\Resources\EmailQueues\Pages;

use App\Filament\Resources\EmailQueues\EmailQueueResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEmailQueue extends CreateRecord
{
    protected static string $resource = EmailQueueResource::class;
}
