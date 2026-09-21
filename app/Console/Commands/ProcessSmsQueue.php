<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Contracts\Sms\SmsProcessingServiceInterface;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('sms:process')]
#[Description('Command description')]
final class ProcessSmsQueue extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(SmsProcessingServiceInterface $service): int
    {
        $service->processPending();

        return self::SUCCESS;
    }
}
