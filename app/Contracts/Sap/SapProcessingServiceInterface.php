<?php

declare(strict_types=1);

namespace App\Contracts\Sap;

interface SapProcessingServiceInterface
{
    public function processPending(): void;
}
