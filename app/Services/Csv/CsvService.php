<?php

declare(strict_types=1);

namespace App\Services\Csv;

use Illuminate\Support\Facades\File;
use RuntimeException;

final class CsvService
{
    /**
     * @param  list<string>  $headers
     * @param  list<list<int|float|string|bool|null>>  $rows
     */
    public function write(string $path, array $rows, array $headers = []): void
    {
        if (blank($path)) {
            throw new RuntimeException('CSV path cannot be empty.');
        }

        File::ensureDirectoryExists(dirname($path));

        $newFile = ! File::exists($path) || File::size($path) === 0;

        $handle = fopen($path, $newFile ? 'w' : 'a');

        if (! $handle) {
            throw new RuntimeException('Unable to open '.$path);
        }

        try {
            if ($newFile && $headers !== []) {
                fputcsv($handle, $headers, escape: '\\');
            }

            foreach ($rows as $row) {
                fputcsv($handle, $row, escape: '\\');
            }
        } finally {
            fclose($handle);
        }
    }

    /**
     * @return list<list<string>>
     */
    public function read(string $path, bool $includeHeader = false): array
    {
        if (! File::exists($path)) {
            return [];
        }

        $rows = [];

        $handle = fopen($path, 'r');

        if (! $handle) {
            return [];
        }

        try {
            if (! $includeHeader) {
                fgetcsv($handle, escape: '\\');
            }

            while (($row = fgetcsv($handle, escape: '\\')) !== false) {
                $rows[] = $row;
            }

        } finally {
            fclose($handle);
        }

        return $rows;
    }
}
