<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Contracts\Email\EmailProcessingServiceInterface;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('email:confirmation')]
#[Description('Process pending confirmation emails')]
final class ProcessConfirmationEmails extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(EmailProcessingServiceInterface $processor): int
    {
        $processor->processPending();

        return self::SUCCESS;
    }
}
