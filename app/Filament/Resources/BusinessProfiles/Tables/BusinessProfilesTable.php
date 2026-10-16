<?php

declare(strict_types=1);

namespace App\Filament\Resources\BusinessProfiles\Tables;

use App\Enum\BusinessProfileStatus;
use App\Traits\HasDateFilters;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class BusinessProfilesTable
{
    use HasDateFilters;

    public static function configure(Table $table): Table
    {
        return $table
            ->striped()
            ->columns([
                TextColumn::make('business_short_code')
                    ->sortable()
                    ->copyable()
                    ->searchable()
                    ->weight('bold')
                    ->color('primary')
                    ->label('Business')
                    ->copyMessageDuration(1500)
                    ->icon(Heroicon::BuildingOffice)
                    ->copyMessage('Business short code copied')
                    ->description(fn ($record): string => (string) $record->business_transaction),

                TextColumn::make('type')
                    ->badge()
                    ->sortable()
                    ->searchable()
                    ->label('Type')
                    ->icon(Heroicon::Tag),

                TextColumn::make('username')
                    ->sortable()
                    ->copyable()
                    ->searchable()
                    ->label('Username')
                    ->icon(Heroicon::User)
                    ->copyMessage('Username copied'),

                TextColumn::make('credit_account')
                    ->copyable()
                    ->searchable()
                    ->toggleable()
                    ->label('Credit Account')
                    ->icon(Heroicon::Banknotes)
                    ->placeholder('Not configured'),

                TextColumn::make('business_area')
                    ->searchable()
                    ->toggleable()
                    ->placeholder('—')
                    ->icon(Heroicon::MapPin)
                    ->label('Business Area'),

                TextColumn::make('profit_center')
                    ->searchable()
                    ->placeholder('—')
                    ->label('Profit Center')
                    ->icon(Heroicon::ChartBar)
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('sap_file')
                    ->copyable()
                    ->searchable()
                    ->label('SAP File')
                    ->icon(Heroicon::DocumentText)
                    ->placeholder('Not configured')
                    ->toggleable(isToggledHiddenByDefault: true),

                IconColumn::make('active')
                    ->boolean()
                    ->sortable()
                    ->label('Status')
                    ->trueColor('success')
                    ->falseColor('danger')
                    ->falseIcon(Heroicon::XCircle)
                    ->trueIcon(Heroicon::CheckCircle)
                    ->tooltip(fn ($state): string => $state ? 'Active' : 'Inactive')
                    ->state(fn ($record): bool => $record->active === BusinessProfileStatus::YES),

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
                TernaryFilter::make('active')
                    ->label('Status')
                    ->trueLabel('Active only')
                    ->falseLabel('Inactive only')
                    ->placeholder('All profiles'),

                self::getDateFilter('created_at', 'Created Date Range'),
            ])
            ->recordActions([
                ViewAction::make()
                    ->tooltip('View business profile'),

                EditAction::make()
                    ->tooltip('Edit business profile'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
