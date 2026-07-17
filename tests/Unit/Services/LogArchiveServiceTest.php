<?php

declare(strict_types=1);

use App\Services\Logging\LogArchiveService;
use App\Services\Logging\LoggingService;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;

beforeEach(function (): void {
    Config::set('logging.retention', 14);

    $this->directory = storage_path('logs');

    File::ensureDirectoryExists($this->directory);
    File::cleanDirectory($this->directory);

    $this->service = new LogArchiveService(
        app(LoggingService::class)
    );
});

afterEach(function (): void {
    File::cleanDirectory($this->directory);
});

it('archives an old log file', function (): void {
    $log = $this->directory.'/confirmation-2026-01-01.log';

    File::put($log, 'test');

    touch($log, now()->subDay()->timestamp);

    $this->service->archive();

    expect(File::exists($log))->toBeFalse()
        ->and(File::exists(str_replace('.log', '.zip', $log)))
        ->toBeTrue();
});

it('does not archive todays log', function (): void {
    $log = sprintf(
        '%s/confirmation-%s.log',
        $this->directory,
        now()->format('Y-m-d'),
    );

    File::put($log, 'today');

    $this->service->archive();

    expect(File::exists($log))->toBeTrue();
});

it('ignores non log files', function (): void {
    $txt = $this->directory.'/readme.txt';

    File::put($txt, 'abc');

    $this->service->archive();

    expect(File::exists($txt))->toBeTrue();
});

it('deletes zip archives older than retention period', function (): void {
    $zip = $this->directory.'/old.zip';

    File::put($zip, 'abc');

    touch(
        $zip,
        now()->subDays(20)->timestamp,
    );

    $this->service->archive();

    expect(File::exists($zip))->toBeFalse();
});

it('keeps recent zip archives', function (): void {
    $zip = $this->directory.'/recent.zip';

    File::put($zip, 'abc');

    touch(
        $zip,
        now()->subDays(5)->timestamp,
    );

    $this->service->archive();

    expect(File::exists($zip))->toBeTrue();
});

it('creates one archive for each log', function (): void {
    foreach (range(1, 3) as $i) {
        $log = $this->directory.sprintf('/confirmation-%s.log', $i);

        File::put($log, 'abc');

        touch($log, now()->subDay()->timestamp);
    }

    $this->service->archive();

    expect(
        collect(File::files($this->directory))
            ->filter(fn ($file): bool => $file->getExtension() === 'zip')
    )->toHaveCount(3);
});
