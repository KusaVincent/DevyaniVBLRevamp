<?php

namespace App\Contracts\Email;

interface EmailProcessingServiceInterface
{
    public function processPending(): void;
}
