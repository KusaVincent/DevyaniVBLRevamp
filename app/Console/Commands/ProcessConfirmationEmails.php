<?php

namespace App\Console\Commands;

use App\Services\Email\EmailProcessingService;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('email:confirmation')]
#[Description('Process pending confirmation emails')]
class ProcessConfirmationEmails extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(EmailProcessingService $processor): int
    {
        $processor->processPending();

        return self::SUCCESS;
    }
}
