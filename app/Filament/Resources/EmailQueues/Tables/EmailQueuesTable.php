<?php

declare(strict_types=1);

namespace App\Filament\Resources\EmailQueues\Tables;

use App\Enum\Status;
use App\Models\EmailQueue;
use App\Traits\HasDateFilters;
use Filament\Actions\Action;
use Filament\Actions\ViewAction;
use Filament\Support\Colors\Color;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Facades\File;

class EmailQueuesTable
{
    use HasDateFilters;

    public static function configure(Table $table): Table
    {
        return $table
            ->poll('60s')
            ->columns([
                TextColumn::make('subject')
                    ->sortable()
                    ->searchable()
                    ->limit(45)
                    ->weight('bold')
                    ->label('Email Subject')
                    ->icon(Heroicon::Envelope)
                    ->tooltip(fn (EmailQueue $record): string => $record->subject),

                TextColumn::make('status')
                    ->badge()
                    ->sortable(),

                TextColumn::make('attempts')
                    ->badge()
                    ->numeric()
                    ->sortable()
                    ->alignCenter()
                    ->color(fn (int $state): string => match (true) {
                        $state === 0 => 'gray',
                        $state < 3 => 'info',
                        default => 'danger',
                    }),

                TextColumn::make('next_retry_at')
                    ->sortable()
                    ->label('Next Retry')
                    ->dateTime('d M Y, H:i')
                    ->icon(Heroicon::ArrowPath)
                    ->placeholder('Not scheduled')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->description(fn (EmailQueue $record): string => $record->next_retry_at?->diffForHumans() ?? 'Not scheduled'),

                TextColumn::make('processed_at')
                    ->sortable()
                    ->label('Processed')
                    ->dateTime('d M Y, H:i')
                    ->icon(Heroicon::CheckCircle)
                    ->placeholder('Not processed')
                    ->description(fn (EmailQueue $record): string => $record->processed_at?->diffForHumans() ?? 'Not processed'),

                TextColumn::make('header')
                    ->searchable()
                    ->limit(35)
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->tooltip(fn (EmailQueue $record): ?string => $record->header),

                TextColumn::make('attachment')
                    ->searchable()
                    ->toggleable()
                    ->limit(30)
                    ->placeholder('No attachment')
                    ->tooltip(fn (EmailQueue $record): ?string => $record->attachment),

                TextColumn::make('archived_at_file')
                    ->searchable()
                    ->toggleable()
                    ->limit(30)
                    ->label('Archived File')
                    ->placeholder('No archived file')
                    ->tooltip(fn (EmailQueue $record): ?string => $record->archived_at_file),

                TextColumn::make('message')
                    ->searchable()
                    ->limit(50)
                    ->placeholder('No message')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->tooltip(fn (EmailQueue $record): ?string => $record->message),

                TextColumn::make('created_at')
                    ->label('Queued')
                    ->dateTime('d M Y, H:i')
                    ->description(fn (EmailQueue $record): string => $record->created_at?->diffForHumans() ?? '—')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->since()
                    ->sortable()
                    ->label('Last Updated')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options(Status::class),

                self::getDateFilter('created_at', 'Queued Date Range'),
                self::getDateFilter('processed_at', 'Processed Date Range'),
            ])
            ->recordActions([
                ViewAction::make(),

                Action::make('retry')
                    ->label('Retry')
                    ->color('warning')
                    ->requiresConfirmation()
                    ->icon(Heroicon::ArrowPath)
                    ->modalHeading('Retry Email')
                    ->modalSubmitActionLabel('Retry Email')
                    ->visible(
                        fn (EmailQueue $record): bool => auth()->user()?->can('retry-queues') === true
                            && in_array($record->status, [Status::PROCESSED, Status::ABANDONED], true)
                    )
                    ->action(function (EmailQueue $record): void {
                        $record->update([
                            'status' => Status::PENDING,
                            'attempts' => 1,
                            'processed_at' => null,
                            'next_retry_at' => null,
                        ]);
                    })
                    ->modalDescription('This will return the email to Pending so it can be processed again.'),

                Action::make('downloadArchivedFile')
                    ->label('Download')
                    ->color(Color::Sky)
                    ->icon(Heroicon::ArrowDownTray)
                    ->visible(fn (EmailQueue $record): bool => filled($record->archived_at_file))
                    ->action(function (EmailQueue $record) {
                        $primaryPath = $record->archived_at_file;
                        $secondaryPath = dirname($primaryPath).'/archive/'.basename($primaryPath);

                        $path = match (true) {
                            File::isFile($primaryPath) => $primaryPath,
                            File::isFile($secondaryPath) => $secondaryPath,
                            default => null,
                        };

                        abort_unless($path !== null, 404, 'Archived file not found.');

                        return response()->download($path, basename($path));
                    }),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
