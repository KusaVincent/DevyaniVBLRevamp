<?php

declare(strict_types=1);

namespace App\Filament\Resources\EmailQueues\Pages;

use App\Filament\Resources\EmailQueues\EmailQueueResource;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreateEmailQueue extends CreateRecord
{
    #[Override]
    protected static string $resource = EmailQueueResource::class;
}
