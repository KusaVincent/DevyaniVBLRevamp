<?php

declare(strict_types=1);

use App\Services\Csv\CsvService;
use Illuminate\Support\Facades\File;

beforeEach(function () {
    $this->service = new CsvService();

    $this->directory = base_path('tests/Fixtures');

    File::ensureDirectoryExists($this->directory);

    $this->file = $this->directory.'/test.csv';

    File::delete($this->file);
});

afterEach(function () {
    File::delete($this->file);
});

it('creates a csv file', function () {
    $this->service->write(
        $this->file,
        [
            ['John', '1000'],
        ],
        ['Name', 'Amount'],
    );

    expect(File::exists($this->file))->toBeTrue();
});

it('writes the header only once', function () {
    $this->service->write(
        $this->file,
        [
            ['John', '1000'],
        ],
        ['Name', 'Amount'],
    );

    $this->service->write(
        $this->file,
        [
            ['Jane', '2000'],
        ],
        ['Name', 'Amount'],
    );

    $contents = file($this->file, FILE_IGNORE_NEW_LINES);

    expect($contents)->toHaveCount(3)
        ->and($contents[0])->toBe('Name,Amount')
        ->and($contents[1])->toBe('John,1000')
        ->and($contents[2])->toBe('Jane,2000');
});

it('appends rows', function () {
    $this->service->write(
        $this->file,
        [
            ['John', '1000'],
        ],
        ['Name', 'Amount'],
    );

    $this->service->write(
        $this->file,
        [
            ['Jane', '2000'],
        ],
    );

    $rows = $this->service->read($this->file);

    expect($rows)->toBe([
        ['John', '1000'],
        ['Jane', '2000'],
    ]);
});

it('reads rows excluding the header', function () {
    $this->service->write(
        $this->file,
        [
            ['John', '1000'],
            ['Jane', '2000'],
        ],
        ['Name', 'Amount'],
    );

    expect(
        $this->service->read($this->file)
    )->toBe([
        ['John', '1000'],
        ['Jane', '2000'],
    ]);
});

it('reads rows including the header', function () {
    $this->service->write(
        $this->file,
        [
            ['John', '1000'],
        ],
        ['Name', 'Amount'],
    );

    expect(
        $this->service->read($this->file, true)
    )->toBe([
        ['Name', 'Amount'],
        ['John', '1000'],
    ]);
});

it('returns an empty array when the file does not exist', function () {
    expect(
        $this->service->read($this->directory.'/missing.csv')
    )->toBe([]);
});

it('throws an exception when the path is empty', function () {
    $this->service->write('', []);

})->throws(RuntimeException::class, 'CSV path cannot be empty.');
