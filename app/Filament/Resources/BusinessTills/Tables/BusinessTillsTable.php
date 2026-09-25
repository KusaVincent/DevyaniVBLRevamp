<?php

declare(strict_types=1);

namespace App\Filament\Resources\BusinessTills\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BusinessTillsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('till')
                    ->label('Till')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->copyable()
                    ->icon(Heroicon::DevicePhoneMobile),

                TextColumn::make('businessProfile.business_short_code')
                    ->label('Business')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->icon(Heroicon::BuildingOffice),

                TextColumn::make('for')
                    ->label('For')
                    ->searchable()
                    ->placeholder('—')
                    ->icon(Heroicon::User),

                TextColumn::make('additional_details')
                    ->label('Additional Details')
                    ->searchable()
                    ->placeholder('—')
                    ->limit(50)
                    ->tooltip(fn (TextColumn $column): ?string => $column->getState()),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('M d, Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->since()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
