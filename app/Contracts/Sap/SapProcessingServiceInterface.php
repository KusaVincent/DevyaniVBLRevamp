<?php

namespace App\Contracts\Sap;

interface SapProcessingServiceInterface
{
    public function processPending(): void;
}
