<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Contracts\Logging\LogArchiveServiceInterface;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('logs:archive')]
#[Description('Archives old log files')]
class ArchiveLogs extends Command
{
    public function handle(LogArchiveServiceInterface $service): int
    {
        $service->archive();

        return self::SUCCESS;
    }
}
