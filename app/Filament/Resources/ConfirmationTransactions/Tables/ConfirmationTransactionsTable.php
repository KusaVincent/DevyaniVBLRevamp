<?php

declare(strict_types=1);

namespace App\Filament\Resources\ConfirmationTransactions\Tables;

use App\Enum\ProcessSMSTxn;
use App\Enum\Status;
use App\Models\ConfirmationTransaction;
use App\Traits\HasDateFilters;
use Filament\Actions\Action;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Carbon;

final class ConfirmationTransactionsTable
{
    use HasDateFilters;

    public static function configure(Table $table): Table
    {
        return $table
            ->poll('60s')
            ->columns([
                TextColumn::make('transaction_id')
                    ->sortable()
                    ->copyable()
                    ->searchable()
                    ->weight('bold')
                    ->color('primary')
                    ->icon(Heroicon::Hashtag)
                    ->label('Transaction ID')
                    ->copyMessageDuration(1500)
                    ->copyMessage('Transaction ID copied'),

                TextColumn::make('status')
                    ->badge()
                    ->sortable()
                    ->searchable()
                    ->label('Status'),

                TextColumn::make('process')
                    ->badge()
                    ->sortable()
                    ->label('Processing'),

                TextColumn::make('customer_name')
                    ->wrap()
                    ->sortable()
                    ->searchable()
                    ->label('Customer')
                    ->weight('medium')
                    ->icon(Heroicon::User)
                    ->placeholder('Unknown customer'),

                TextColumn::make('bill_reference')
                    ->sortable()
                    ->copyable()
                    ->searchable()
                    ->placeholder('—')
                    ->label('Bill Reference')
                    ->icon(Heroicon::DocumentText)
                    ->copyMessage('Bill reference copied'),

                TextColumn::make('amount')
                    ->sortable()
                    ->alignEnd()
                    ->label('Amount')
                    ->money('KES')
                    ->weight('bold')
                    ->color('success'),

                TextColumn::make('transaction_time')
                    ->sortable()
                    ->icon(Heroicon::Clock)
                    ->dateTime('d M Y, H:i')
                    ->label('Transaction Time')
                    ->description(fn (ConfirmationTransaction $record): string =>
                        filled($record->transaction_time) ? Carbon::parse($record->transaction_time)->diffForHumans() : '—'
                    ),

                TextColumn::make('business_short_code')
                    ->badge()
                    ->sortable()
                    ->copyable()
                    ->searchable()
                    ->color('info')
                    ->label('Business')
                    ->placeholder('—')
                    ->icon(Heroicon::BuildingOffice),

                TextColumn::make('businessProfile.type')
                    ->badge()
                    ->toggleable()
                    ->placeholder('—')
                    ->label('Business Type'),

                TextColumn::make('narrative')
                    ->searchable()
                    ->limit(45)
                    ->label('Narrative')
                    ->placeholder('—')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->tooltip(fn (TextColumn $column): ?string => filled($column->getState())
                        ? (string) $column->getState()
                        : null
                    ),

                TextColumn::make('ft_ref')
                    ->copyable()
                    ->searchable()
                    ->placeholder('—')
                    ->label('FT Reference')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('created_at')
                    ->sortable()
                    ->label('Created')
                    ->dateTime('d M Y, H:i')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->description(fn (ConfirmationTransaction $record): string => $record->created_at?->diffForHumans() ?? '—'),

                TextColumn::make('updated_at')
                    ->since()
                    ->sortable()
                    ->dateTimeTooltip()
                    ->label('Updated')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Transaction Status')
                    ->options(Status::class),

                SelectFilter::make('process')
                    ->label('Processing Status')
                    ->options(ProcessSMSTxn::class),

                self::getDateFilter('created_at', 'Created Date Range'),
            ])
            ->recordActions([
                Action::make('process')
                    ->label('Process')
                    ->icon(Heroicon::Play)
                    ->color('success')
                    ->visible(
                        fn (ConfirmationTransaction $record): bool =>
                            $record->process === ProcessSMSTxn::NO
                    )
                    ->requiresConfirmation()
                    ->modalIcon(Heroicon::Play)
                    ->modalSubmitActionLabel('Process')
                    ->modalHeading('Process Transaction')
                    ->action(function (ConfirmationTransaction $record): void {
                        $record->update([
                            'process' => ProcessSMSTxn::YES,
                        ]);
                    })
                    ->modalDescription('Are you sure you want to mark this transaction for processing?'),

                Action::make('retry')
                    ->label('Retry')
                    ->color('warning')
                    ->requiresConfirmation()
                    ->icon(Heroicon::ArrowPath)
                    ->modalIcon(Heroicon::ArrowPath)
                    ->modalSubmitActionLabel('Retry')
                    ->modalHeading('Retry Transaction')
                    ->visible(
                        fn (ConfirmationTransaction $record): bool =>
                            $record->status === Status::PROCESSED
                    )
                    ->action(function (ConfirmationTransaction $record): void {
                        $record->update([
                            'status' => Status::PENDING,
                        ]);
                    })
                    ->modalDescription('This will change the transaction status from Processed back to Pending.'),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
