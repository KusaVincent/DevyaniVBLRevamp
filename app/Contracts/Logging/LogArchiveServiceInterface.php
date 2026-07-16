<?php

namespace App\Contracts\Logging;

interface LogArchiveServiceInterface
{
    public function archiveCurrentLog(): string;
}
