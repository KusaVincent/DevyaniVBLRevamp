<?php

declare(strict_types=1);

namespace App\Filament\Resources\BusinessTills\Tables;

use App\Traits\HasDateFilters;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BusinessTillsTable
{
    use HasDateFilters;

    public static function configure(Table $table): Table
    {
        return $table
            ->striped()
            ->columns([
                TextColumn::make('till')
                    ->sortable()
                    ->copyable()
                    ->searchable()
                    ->size('lg')
                    ->weight('bold')
                    ->color('primary')
                    ->label('Till Number')
                    ->copyMessage('Till number copied')
                    ->copyMessageDuration(1500)
                    ->icon(Heroicon::DevicePhoneMobile),

                TextColumn::make('businessProfile.business_short_code')
                    ->badge()
                    ->sortable()
                    ->searchable()
                    ->color('info')
                    ->label('Business')
                    ->icon(Heroicon::BuildingOffice)
                    ->placeholder('No business assigned'),

                TextColumn::make('cust_code')
                    ->sortable()
                    ->copyable()
                    ->toggleable()
                    ->searchable()
                    ->label('Customer Code')
                    ->icon(Heroicon::Identification)
                    ->copyMessage('Customer code copied')
                    ->placeholder('Not provided'),

                TextColumn::make('for')
                    ->wrap()
                    ->searchable()
                    ->label('Assigned To')
                    ->icon(Heroicon::User)
                    ->placeholder('Not specified'),

                TextColumn::make('additional_details')
                    ->wrap()
                    ->searchable()
                    ->limit(45)
                    ->label('Additional Details')
                    ->placeholder('No additional details')
                    ->tooltip(fn (TextColumn $column): ?string => filled($column->getState())
                            ? (string) $column->getState()
                            : null
                    ),

                TextColumn::make('created_at')
                    ->sortable()
                    ->label('Created')
                    ->dateTime('d M Y, H:i')
                    ->icon(Heroicon::CalendarDays)
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->description(fn ($record): string => $record->created_at?->diffForHumans() ?? '—'),

                TextColumn::make('updated_at')
                    ->since()
                    ->sortable()
                    ->dateTimeTooltip()
                    ->label('Last Updated')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make()
                    ->tooltip('View till'),

                EditAction::make()
                    ->tooltip('Edit till'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
