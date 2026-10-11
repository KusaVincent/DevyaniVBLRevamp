<?php

declare(strict_types=1);

namespace App\Filament\Resources\CustomerReferences\Tables;

use App\Traits\HasDateFilters;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CustomerReferencesTable
{
    use HasDateFilters;

    public static function configure(Table $table): Table
    {
        return $table
            ->striped()
            ->columns([
                TextColumn::make('reference')
                    ->sortable()
                    ->copyable()
                    ->searchable()
                    ->weight('bold')
                    ->color('primary')
                    ->label('Reference')
                    ->icon(Heroicon::Hashtag)
                    ->copyMessage('Reference copied')
                    ->description('Customer code'),

                TextColumn::make('name')
                    ->sortable()
                    ->searchable()
                    ->weight('medium')
                    ->icon(Heroicon::User)
                    ->label('Customer Name')
                    ->description(fn ($record): string => filled($record->mobile) ? 'Registered customer'  : 'No mobile number'),

                TextColumn::make('mobile')
                    ->copyable()
                    ->searchable()
                    ->icon(Heroicon::Phone)
                    ->label('Mobile Number')
                    ->copyMessage('Mobile number copied')
                    ->placeholder('Not provided'),

                TextColumn::make('created_at')
                    ->sortable()
                    ->dateTime('d M Y, H:i')
                    ->label('Date Registered')
                    ->icon(Heroicon::CalendarDays)
                    ->description(fn ($record): string => $record->created_at?->diffForHumans() ?? '—'),

                TextColumn::make('updated_at')
                    ->since()
                    ->sortable()
                    ->label('Last Updated')
                    ->icon(Heroicon::Clock)
                    ->placeholder('Never')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                self::getDateFilter('created_at', 'Registration Date Range'),
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
            ->defaultSort('created_at', 'desc')
            ->striped();
    }
}
