<?php

declare(strict_types=1);

namespace App\Services\Sap;

use Illuminate\Support\Facades\File;
use RuntimeException;

final readonly class SapArchiveService
{
    public function prepare(string $sourceFile): ?string
    {
        if (! File::exists($sourceFile)) {
            return null;
        }

        $temporary = storage_path(
            'app/temp/'.basename($this->archiveFilename($sourceFile))
        );

        File::ensureDirectoryExists(dirname($temporary));

        File::copy($sourceFile, $temporary);

        return $temporary;
    }

    public function archive(string $temporaryFile, ?string $originalFile = null,): ?string
    {
        if (! File::exists($temporaryFile)) {
            return null;
        }

        $destination = $this->archivePath()
            .DIRECTORY_SEPARATOR
            .basename($temporaryFile);

        File::move($temporaryFile, $destination);

        if ($originalFile && File::exists($originalFile)) {
            File::delete($originalFile);
        }

        return $destination;
    }

    private function archiveFilename(string $source): string
    {
        $timestamp = now()->format('Ymd_His');

        return match (basename($source)) {
            'C2B.csv'     => "{$timestamp}_C2B.csv",
            'VBL_C2B.csv' => "VBL_{$timestamp}_C2B.csv",
            default       => basename($source),
        };
    }

    private function archivePath(): string
    {
        $path = config('confirmation.sap.path');

        if (blank($path)) {
            throw new RuntimeException(
                'SAP archive path is not configured.'
            );
        }

        File::ensureDirectoryExists($path);

        return $path;
    }
}
