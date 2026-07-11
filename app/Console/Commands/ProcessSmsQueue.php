<?php

namespace App\Console\Commands;

use App\Services\Sms\SmsProcessingService;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('sms:process')]
#[Description('Command description')]
class ProcessSmsQueue extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(SmsProcessingService $service): int
    {
        $service->processPending();

        return self::SUCCESS;
    }
}
