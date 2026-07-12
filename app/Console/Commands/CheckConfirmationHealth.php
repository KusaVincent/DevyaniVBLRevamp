<?php

namespace App\Console\Commands;

use App\Services\Health\ConfirmationHealthService;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('confirmation:health')]
#[Description('Checks the confirmation service health')]
class CheckConfirmationHealth extends Command
{
    public function handle(ConfirmationHealthService $service): int
    {
        $service->check();

        return self::SUCCESS;
    }
}
