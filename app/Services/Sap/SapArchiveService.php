<?php

declare(strict_types=1);

namespace App\Services\Sap;

use App\Contracts\Sap\SapArchiveServiceInterface;
use Illuminate\Support\Facades\File;
use RuntimeException;

final readonly class SapArchiveService implements SapArchiveServiceInterface
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

    public function archive(string $temporaryFile, ?string $originalFile = null): ?string
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

    public function restore(string $path): ?string
    {
        if (File::exists($path)) {
            return $path;
        }

        $archivePath = $this->archivePath()
            .DIRECTORY_SEPARATOR
            .basename($path);

        if (! File::exists($archivePath)) {
            return null;
        }

        File::ensureDirectoryExists(dirname($path));

        File::move($archivePath, $path);

        return $path;
    }

    private function archiveFilename(string $source): string
    {
        $filename = basename($source);
        $timestamp = now()->format('Ymd_His');

        $sapAppendedName = config('confirmation.sap.appended_name', '_C2B.csv');

        $baseAppendedName = mb_ltrim($sapAppendedName, '_');

        if ($filename === $baseAppendedName) {
            return $timestamp.$sapAppendedName;
        }

        if (! str_ends_with($filename, $sapAppendedName)) {
            return $filename;
        }

        $prefix = mb_substr($filename, 0, -mb_strlen($sapAppendedName));

        return $prefix === ''
            ? $timestamp.$sapAppendedName
            : $prefix.'_'.$timestamp.$sapAppendedName;
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
