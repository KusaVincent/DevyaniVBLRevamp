<?php

namespace App\Filament\Resources\ConfirmationTransactions\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ConfirmationTransactionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('transaction_id')
                    ->searchable(),
                TextColumn::make('status')
                    ->badge()
                    ->searchable(),
                TextColumn::make('customer_name')
                    ->searchable(),
                TextColumn::make('bill_reference')
                    ->searchable(),
                TextColumn::make('amount')
                    ->numeric()
                    ->sortable()
                    ->money('KES'),
                TextColumn::make('transaction_time')
                    ->searchable(),
                TextColumn::make('business_short_code')
                    ->searchable(),
                TextColumn::make('process')
                    ->badge()
                    ->sortable(),
                TextColumn::make('businessProfile.type')
                    ->label('Business Type')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('narrative')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('ft_ref')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ]);
    }
}
