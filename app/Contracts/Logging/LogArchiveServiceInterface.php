<?php

namespace App\Contracts\Logging;

interface LogArchiveServiceInterface
{
    public function archive(): void;
    public function archiveCurrentLog(): string;
}
