<?php

declare(strict_types=1);

namespace App\Filament\Resources\SmsQueues\Tables;

use App\Enum\ProcessSMSTxn;
use App\Enum\Status;
use App\Models\SmsQueue;
use App\Traits\HasDateFilters;
use Filament\Actions\Action;
use Filament\Actions\ViewAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class SmsQueuesTable
{
    use HasDateFilters;

    public static function configure(Table $table): Table
    {
        return $table
            ->poll('60s')
            ->columns([
                TextColumn::make('mpesa_ref')
                    ->sortable()
                    ->copyable()
                    ->searchable()
                    ->weight('bold')
                    ->color('primary')
                    ->icon(Heroicon::Hashtag)
                    ->label('M-Pesa Reference'),

                TextColumn::make('recipient_name')
                    ->sortable()
                    ->searchable()
                    ->weight('medium')
                    ->icon(Heroicon::User)
                    ->label('Recipient Name')
                    ->placeholder('Unknown'),

                TextColumn::make('recipient_mobile')
                    ->copyable()
                    ->searchable()
                    ->label('Mobile')
                    ->icon(Heroicon::Phone),

                TextColumn::make('customer_name')
                    ->sortable()
                    ->searchable()
                    ->label('Customer Name')
                    ->icon(Heroicon::UserCircle)
                    ->placeholder('Unknown'),

                TextColumn::make('amount')
                    ->sortable()
                    ->alignEnd()
                    ->prefix('KES ')
                    ->numeric(
                        decimalPlaces: 2,
                        decimalSeparator: '.',
                        thousandsSeparator: ',',
                    )
                    ->weight('semibold'),

                TextColumn::make('bill_reference')
                    ->copyable()
                    ->sortable()
                    ->searchable()
                    ->toggleable()
                    ->placeholder('—')
                    ->label('Bill Reference'),

                TextColumn::make('status')
                    ->badge()
                    ->sortable(),

                TextColumn::make('process')
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

                TextColumn::make('processed_at')
                    ->sortable()
                    ->label('Processed')
                    ->dateTime('d M Y, H:i')
                    ->icon(Heroicon::CheckCircle)
                    ->placeholder('Not processed')
                    ->description(fn (SmsQueue $record): string => $record->processed_at?->diffForHumans() ?? 'Not processed'),

                TextColumn::make('next_retry_at')
                    ->sortable()
                    ->label('Next Retry')
                    ->dateTime('d M Y, H:i')
                    ->icon(Heroicon::ArrowPath)
                    ->placeholder('Not scheduled')
                    ->description(fn (SmsQueue $record): string => $record->next_retry_at?->diffForHumans() ?? 'Not scheduled'),

                TextColumn::make('created_at')
                    ->sortable()
                    ->label('Queued')
                    ->dateTime('d M Y, H:i')
                    ->icon(Heroicon::CalendarDays)
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->description(fn (SmsQueue $record): string => $record->created_at?->diffForHumans() ?? '—'),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options(Status::class),

                SelectFilter::make('process')
                    ->options(ProcessSMSTxn::class),

                self::getDateFilter('created_at', 'Queued Date Range'),
            ])
            ->recordActions([
                ViewAction::make(),

                Action::make('reprocess')
                    ->label('Process')
                    ->color('success')
                    ->requiresConfirmation()
                    ->icon(Heroicon::Play)
                    ->modalHeading('Enable SMS Processing')
                    ->modalSubmitActionLabel('Enable Processing')
                    ->visible(
                        fn (SmsQueue $record): bool => auth()->user()?->can('reprocess-queues') === true
                            && $record->process === ProcessSMSTxn::NO
                    )
                    ->action(function (SmsQueue $record): void {
                        $record->update([
                            'process' => ProcessSMSTxn::YES,
                        ]);
                    })
                    ->modalDescription('This will enable processing for this SMS. The queue worker must be running to process it.'),

                Action::make('retry')
                    ->label('Retry')
                    ->color('warning')
                    ->requiresConfirmation()
                    ->icon(Heroicon::ArrowPath)
                    ->modalHeading('Retry SMS')
                    ->modalSubmitActionLabel('Retry SMS')
                    ->visible(
                        fn (SmsQueue $record): bool => auth()->user()?->can('retry-queues') === true
                            && in_array($record->status, [Status::PROCESSED, Status::ABANDONED], true)
                    )
                    ->action(function (SmsQueue $record): void {
                        $record->update([
                            'status' => Status::PENDING,
                            'attempts' => 1,
                            'processed_at' => null,
                            'next_retry_at' => null,
                        ]);
                    })
                    ->modalDescription('This will return the SMS to Pending so it can be processed again.'),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
