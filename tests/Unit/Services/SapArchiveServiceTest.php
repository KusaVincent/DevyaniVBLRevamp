<?php

declare(strict_types=1);

use App\Services\Sap\SapArchiveService;
use Illuminate\Support\Facades\File;

beforeEach(function () {
    $this->service = new SapArchiveService();

    $this->source = storage_path('framework/testing/sap');

    $this->archive = storage_path('framework/testing/archive');

    config()->set(
        'confirmation.sap.path',
        $this->archive,
    );

    File::ensureDirectoryExists($this->source);
    File::ensureDirectoryExists($this->archive);

    File::cleanDirectory($this->source);
    File::cleanDirectory($this->archive);
});

afterEach(function () {
    File::cleanDirectory($this->source);
    File::cleanDirectory($this->archive);
});

it('prepares c2b file', function () {

    $source = $this->source.'/C2B.csv';

    File::put($source, 'abc');

    $prepared = $this->service->prepare($source);

    expect($prepared)
        ->not->toBeNull()
        ->and(File::exists($prepared))->toBeTrue()
        ->and(basename($prepared))
        ->toMatch('/^\d{8}_\d{6}_C2B\.csv$/');

});

it('prepares vbl file', function () {

    $source = $this->source.'/VBL_C2B.csv';

    File::put($source, 'abc');

    $prepared = $this->service->prepare($source);

    expect(basename($prepared))
        ->toMatch('/^VBL_\d{8}_\d{6}_C2B\.csv$/');

});

it('keeps the original file when preparing an email attachment', function () {

    $source = $this->source.'/C2B.csv';

    File::put($source, 'abc');

    $prepared = $this->service->prepare($source);

    expect(File::exists($source))->toBeTrue()
        ->and(File::exists($prepared))->toBeTrue();

});

it('archives prepared file', function () {

    $source = $this->source.'/C2B.csv';

    File::put($source, 'abc');

    $prepared = $this->service->prepare($source);

    $archive = $this->service->archive($prepared);

    expect(File::exists($archive))->toBeTrue()
        ->and(File::exists($prepared))->toBeFalse();

});

it('returns null for missing source file', function () {

    expect(
        $this->service->prepare(
            $this->source.'/missing.csv'
        )
    )->toBeNull();

});

it('returns null when archiving missing file', function () {

    expect(
        $this->service->archive(
            $this->source.'/missing.csv'
        )
    )->toBeNull();

});

it('throws when archive path is not configured', function () {

    config()->set('confirmation.sap.path', '');

    $source = $this->source.'/C2B.csv';

    File::put($source, 'abc');

    $prepared = $this->service->prepare($source);

    $this->service->archive($prepared);

})->throws(
    RuntimeException::class,
    'SAP archive path is not configured.'
);

it('removes the original file after archiving', function () {
    $source = $this->source.'/C2B.csv';

    File::put($source, 'abc');

    $prepared = $this->service->prepare($source);

    $archive = $this->service->archive(
        $prepared,
        $source,
    );

    expect(File::exists($archive))->toBeTrue()
        ->and(File::exists($prepared))->toBeFalse()
        ->and(File::exists($source))->toBeFalse();
});
