<?php

declare(strict_types=1);

namespace App\Services\Logging;

use Illuminate\Support\Facades\File;
use RuntimeException;
use SplFileInfo;
use ZipArchive;

final class LogArchiveService
{
    public function __construct(private readonly LoggingService $logger, private string $directory = '')
    {
        $this->directory = $directory ?: storage_path('logs');
    }

    public function archive(): void
    {
        foreach (File::files($this->directory) as $file) {
            if ($this->shouldArchive($file)) {
                $this->archiveFile($file);
            }
        }

        $this->deleteExpiredArchives($this->directory);
    }

    private function shouldArchive(SplFileInfo $file): bool
    {
        return $file->getExtension() === 'log'
            && $file->getFilename() !== $this->currentLog();
    }

    private function currentLog(): string
    {
        return sprintf(
            'confirmation-%s.log',
            now()->format('Y-m-d'),
        );
    }

    private function archiveFile(SplFileInfo $file): void
    {
        $zipPath = sprintf(
            '%s/%s.zip',
            $file->getPath(),
            $file->getBasename('.log'),
        );

        $archive = new ZipArchive();

        if ($archive->open($zipPath, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
            $this->logger->error('Unable to archive log file.', [
                'file' => $file->getFilename(),
            ]);

            return;
        }

        $archive->addFile(
            $file->getRealPath(),
            $file->getFilename(),
        );

        $archive->close();

        File::delete($file->getRealPath());

        $this->logger->info('Archived log file.', [
            'log' => $file->getFilename(),
            'archive' => basename($zipPath),
        ]);
    }

    public function archiveCurrentLog(): string
    {
        $log = storage_path(sprintf(
            'logs/confirmation-%s.log',
            now()->format('Y-m-d'),
        ));

        $zip = storage_path(sprintf(
            'app/temp/confirmation-log-%s.zip',
            now()->format('YmdHis'),
        ));

        File::ensureDirectoryExists(dirname($zip));

        $archive = new ZipArchive();

        if ($archive->open($zip, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
            throw new RuntimeException('Unable to create log archive.');
        }

        $archive->addFile($log, basename($log));
        $archive->close();

        return $zip;
    }

    private function deleteExpiredArchives(string $directory): void
    {
        $cutoff = now()->subDays(config('logging.retention', 14));

        foreach (File::files($directory) as $file) {
            if ($file->getExtension() !== 'zip') {
                continue;
            }

            if ($file->getMTime() >= $cutoff->timestamp) {
                continue;
            }

            File::delete($file->getRealPath());

            $this->logger->info('Deleted expired log archive.', [
                'archive' => $file->getFilename(),
            ]);
        }
    }
}
