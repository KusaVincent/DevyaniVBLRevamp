<?php

declare(strict_types=1);

namespace App\Contracts\Email;

interface EmailProcessingServiceInterface
{
    public function processPending(): void;
}
