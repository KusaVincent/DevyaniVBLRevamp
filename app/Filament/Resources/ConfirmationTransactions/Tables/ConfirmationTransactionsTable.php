<?php

declare(strict_types=1);

namespace App\Filament\Resources\ConfirmationTransactions\Tables;

use App\Enum\ProcessSMSTxn;
use App\Enum\Status;
use App\Models\ConfirmationTransaction;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class ConfirmationTransactionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('transaction_id')
                    ->label('Transaction ID')
                    ->icon(Heroicon::Hashtag)
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->weight('medium'),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('process')
                    ->label('Process')
                    ->badge()
                    ->sortable(),
                TextColumn::make('customer_name')
                    ->label('Customer')
                    ->icon(Heroicon::User)
                    ->searchable()
                    ->sortable(),
                TextColumn::make('bill_reference')
                    ->label('Bill Reference')
                    ->icon(Heroicon::DocumentText)
                    ->searchable()
                    ->sortable()
                    ->copyable(),
                TextColumn::make('amount')
                    ->label('Amount')
                    ->money('KES')
                    ->sortable()
                    ->alignEnd(),
                TextColumn::make('transaction_time')
                    ->label('Transaction Time')
                    ->dateTime('M d, Y H:i')
                    ->sortable()
                    ->icon(Heroicon::Clock),
                TextColumn::make('business_short_code')
                    ->label('Business Short Code')
                    ->icon(Heroicon::BuildingOffice)
                    ->searchable()
                    ->sortable()
                    ->copyable(),
                TextColumn::make('businessProfile.type')
                    ->label('Business Type')
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('narrative')
                    ->label('Narrative')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('ft_ref')
                    ->label('FT Reference')
                    ->searchable()
                    ->copyable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('M d, Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Updated')
                    ->dateTime('M d, Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                Action::make('process')
                    ->label('Process')
                    ->icon(Heroicon::Play)
                    ->color('success')
                    ->visible(
                        fn (ConfirmationTransaction $record): bool => $record->process === ProcessSMSTxn::NO
                    )
                    ->requiresConfirmation()
                    ->modalHeading('Process Transaction')
                    ->modalDescription(
                        'Are you sure you want to mark this transaction for processing?'
                    )
                    ->modalSubmitActionLabel('Process')
                    ->action(function (ConfirmationTransaction $record): void {
                        $record->update([
                            'process' => ProcessSMSTxn::YES,
                        ]);
                    }),

                Action::make('retry')
                    ->label('Retry')
                    ->icon(Heroicon::ArrowPath)
                    ->color('warning')
                    ->visible(
                        fn (ConfirmationTransaction $record): bool => $record->status === Status::PROCESSED
                    )
                    ->requiresConfirmation()
                    ->modalHeading('Retry Transaction')
                    ->modalDescription(
                        'This will change the transaction status from Processed back to Pending.'
                    )
                    ->modalSubmitActionLabel('Retry')
                    ->action(function (ConfirmationTransaction $record): void {
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
