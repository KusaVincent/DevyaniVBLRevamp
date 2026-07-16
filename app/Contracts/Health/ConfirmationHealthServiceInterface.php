<?php

namespace App\Contracts\Health;

interface ConfirmationHealthServiceInterface
{
    public function check(): void;
}
