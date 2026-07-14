<?php

declare(strict_types=1);

namespace App\Contracts\Sap;

interface SapArchiveServiceInterface
{
    public function prepare(string $sourceFile): ?string;

    public function archive(string $temporaryFile, ?string $originalFile = null): ?string;
}
