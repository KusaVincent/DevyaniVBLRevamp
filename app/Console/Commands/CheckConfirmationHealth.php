<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Contracts\Health\ConfirmationHealthServiceInterface;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('confirmation:health')]
#[Description('Checks the confirmation service health')]
final class CheckConfirmationHealth extends Command
{
    public function handle(ConfirmationHealthServiceInterface $service): int
    {
        $service->check();

        return self::SUCCESS;
    }
}
