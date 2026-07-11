<?php

namespace App\Console\Commands;

use App\Services\Sap\SapProcessingService;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('sap:process')]
#[Description('Command description')]
class ProcessSapTransactions extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(SapProcessingService $processor): int {
        $processor->processPending();

        return self::SUCCESS;
    }
}
