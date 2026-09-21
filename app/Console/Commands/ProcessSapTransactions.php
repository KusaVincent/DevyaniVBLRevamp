<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Contracts\Sap\SapProcessingServiceInterface;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('sap:process')]
#[Description('Command description')]
final class ProcessSapTransactions extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(SapProcessingServiceInterface $processor): int
    {
        $processor->processPending();

        return self::SUCCESS;
    }
}
