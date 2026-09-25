<?php

declare(strict_types=1);

namespace App\Filament\Resources\SmsQueues\Tables;

use App\Enum\ProcessSMSTxn;
use App\Enum\Status;
use App\Models\SmsQueue;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\ViewAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SmsQueuesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('recipient_name')
                    ->label('Recipient')
                    ->searchable()
                    ->sortable()
                    ->weight('medium')
                    ->icon(Heroicon::User),
                TextColumn::make('recipient_mobile')
                    ->label('Mobile')
                    ->searchable()
                    ->copyable()
                    ->icon(Heroicon::Phone),
                TextColumn::make('customer_name')
                    ->label('Customer')
                    ->searchable()
                    ->sortable()
                    ->icon(Heroicon::UserCircle),

                TextColumn::make('amount')
                    ->label('Amount')
                    ->numeric(
                        decimalPlaces: 2,
                        decimalSeparator: '.',
                        thousandsSeparator: ',',
                    )
                    ->prefix('KES ')
                    ->sortable()
                    ->alignEnd(),
                TextColumn::make('mpesa_ref')
                    ->label('M-Pesa Ref')
                    ->searchable()
                    ->copyable()
                    ->sortable()
                    ->icon(Heroicon::Hashtag),
                TextColumn::make('bill_reference')
                    ->label('Bill Reference')
                    ->searchable()
                    ->copyable()
                    ->sortable(),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('process')
                    ->label('Process')
                    ->badge()
                    ->sortable(),
                TextColumn::make('attempts')
                    ->label('Attempts')
                    ->numeric()
                    ->sortable()
                    ->alignCenter(),
                TextColumn::make('processed_at')
                    ->label('Processed')
                    ->dateTime('M d, Y H:i')
                    ->sortable()
                    ->placeholder('Not processed'),
                TextColumn::make('next_retry_at')
                    ->label('Next Retry')
                    ->dateTime('M d, Y H:i')
                    ->sortable()
                    ->placeholder('—'),
                TextColumn::make('created_at')
                    ->label('Queued')
                    ->dateTime('M d, Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),

                Action::make('reprocess')
                    ->label('Process')
                    ->icon(Heroicon::ArrowPath)
                    ->color('success')
                    ->visible(
                        fn (SmsQueue $record): bool => auth()->user()?->can('reprocess-queues') && $record->process === ProcessSMSTxn::NO
                    )
                    ->requiresConfirmation()
                    ->modalHeading('Reprocess SMS')
                    ->modalDescription(
                        'Are you sure you want to mark this SMS for processing again?'
                    )
                    ->modalSubmitActionLabel('Process')
                    ->action(function (SmsQueue $record): void {
                        $record->update([
                            'process' => ProcessSMSTxn::YES,
                        ]);
                    }),
                Action::make('retry')
                    ->label('Retry')
                    ->icon(Heroicon::ArrowPath)
                    ->color('warning')
                    ->visible(
                        fn (SmsQueue $record): bool => auth()->user()?->can('retry-queues') &&
                            ($record->status === Status::PROCESSED || $record->status === Status::ABANDONED)
                    )
                    ->requiresConfirmation()
                    ->modalHeading('Retry SMS')
                    ->modalDescription(
                        'This will change the SMS status from Processed back to Pending.'
                    )
                    ->modalSubmitActionLabel('Retry')
                    ->action(function (SmsQueue $record): void {
                        $record->update([
                            'status' => Status::PENDING,
                        ]);
                    }),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
