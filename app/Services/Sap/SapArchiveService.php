<?php

declare(strict_types=1);

namespace App\Services\Sap;

use Illuminate\Support\Facades\File;
use RuntimeException;

final readonly class SapArchiveService
{
    public function prepare(string $source): string
    {
        if (! File::exists($source)) {
            throw new RuntimeException("SAP file [{$source}] does not exist.");
        }

        $prepared = dirname($source)
            . DIRECTORY_SEPARATOR
            . $this->timestampedFilename(basename($source));

        File::copy($source, $prepared);

        return $prepared;
    }

    public function archive(string $prepared): string
    {
        if (! File::exists($prepared)) {
            throw new RuntimeException("Prepared SAP file [{$prepared}] does not exist.");
        }

        $destination = $this->archivePath()
            . DIRECTORY_SEPARATOR
            . basename($prepared);

        File::move($prepared, $destination);

        return $destination;
    }

    /**
     * Remove the original SAP working file.
     */
    public function cleanup(string $source): void
    {
        File::delete($source);
    }

    private function timestampedFilename(string $name): string
    {
        $timestamp = now()->format('Ymd_His');

        return match ($name) {
            'C2B.csv' => "{$timestamp}_C2B.csv",
            'VBL_C2B.csv' => "VBL_{$timestamp}_C2B.csv",
            default => "{$timestamp}_{$name}",
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
