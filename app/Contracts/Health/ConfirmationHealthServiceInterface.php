<?php

declare(strict_types=1);

namespace App\Contracts\Health;

interface ConfirmationHealthServiceInterface
{
    public function check(): void;
}
