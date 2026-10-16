<?php

declare(strict_types=1);

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Actions\Action;
use Filament\Pages\Page;
use Filament\Support\Colors\Color;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Support\Facades\File;
use SplFileInfo;
use UnitEnum;

final class SapCsvFiles extends Page implements HasTable
{
    use InteractsWithTable;

    #[\Override]
    protected static ?string $title = 'CSV Files';

    #[\Override]
    protected string $view = 'filament.pages.sap-csv-files';

    #[\Override]
    protected static ?string $navigationLabel = 'Unpicked SAP Files';

    #[\Override]
    protected static string|UnitEnum|null $navigationGroup = 'File Management';

    #[\Override]
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    public function table(Table $table): Table
    {
        return $table
            ->records(fn (): array => collect($this->getCsvFiles())
                ->mapWithKeys(fn (array $file): array => [$file['id'] => $file])
                ->all(),
            )
            ->columns([
                TextColumn::make('filename')
                    ->copyable()
                    ->searchable()
                    ->label('File Name'),
                TextColumn::make('size')
                    ->label('Size')
                    ->formatStateUsing(fn (int $state): string => number_format($state / 1024, 2).' KB'),
                TextColumn::make('last_modified')
                    ->label('Last Modified')
                    ->dateTime('d M Y H:i:s'),
                TextColumn::make('path')
                    ->wrap()
                    ->copyable()
                    ->label('File Path'),
            ])
            ->recordActions([
                Action::make('download')
                    ->color(Color::Sky)
                    ->label('Download CSV')
                    ->icon(Heroicon::ArrowDownTray)
                    ->action(function (array $record) {
                        $directory = config('confirmation.sap.processed_path', '');
                        abort_unless($directory !== '' && File::isDirectory($directory), 404, 'SAP directory not found.');

                        $filename = $record['filename'] ?? '';

                        abort_unless($filename !== '' && basename($filename) === $filename
                            && mb_strtolower(pathinfo($filename, PATHINFO_EXTENSION)) === 'csv',
                            404,
                            'Invalid CSV filename.'
                        );

                        $path = $directory.DIRECTORY_SEPARATOR.$filename;
                        abort_unless(File::isFile($path) && is_readable($path), 404, 'CSV file not found.');

                        return response()->download($path, $filename, ['Content-Type' => 'text/csv; charset=UTF-8']);
                    }),
            ])
            ->defaultSort('last_modified', 'desc')
            ->paginated([10, 25, 50]);
    }

    private function getCsvFiles(): array
    {
        $directory = config('confirmation.sap.processed_path', '');

        if (! File::isDirectory($directory)) {
            return [];
        }

        return collect(File::files($directory))
            ->filter(fn (SplFileInfo $file): bool => mb_strtolower($file->getExtension()) === 'csv')
            ->map(fn (SplFileInfo $file): array => [
                'id' => sha1($file->getPathname()),
                'filename' => $file->getFilename(),
                'size' => $file->getSize(),
                'last_modified' => $file->getMTime(),
                'path' => $file->getPathname(),
            ])
            ->sortByDesc('last_modified')
            ->values()
            ->all();
    }
}
