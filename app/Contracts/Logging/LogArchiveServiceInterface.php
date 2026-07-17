<?php

declare(strict_types=1);

namespace App\Contracts\Logging;

interface LogArchiveServiceInterface
{
    public function archive(): void;

    public function archiveCurrentLog(): string;
}
