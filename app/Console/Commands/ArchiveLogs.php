<?php

namespace App\Console\Commands;

use App\Services\Logging\LogArchiveService;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('logs:archive')]
#[Description('Archives old log files')]
class ArchiveLogs extends Command
{
    public function handle(LogArchiveService $service): int
    {
        $service->archive();

        return self::SUCCESS;
    }
}
