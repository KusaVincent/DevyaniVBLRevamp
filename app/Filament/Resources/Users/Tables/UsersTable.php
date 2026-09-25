<?php

declare(strict_types=1);

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('User')
                    ->searchable()
                    ->sortable()
                    ->weight('medium')
                    ->icon(Heroicon::User),
                TextColumn::make('email')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->icon(Heroicon::Envelope),
                TextColumn::make('role')
                    ->badge()
                    ->searchable()
                    ->sortable()
                    ->icon(Heroicon::UserGroup),
                TextColumn::make('status')
                    ->badge()
                    ->searchable()
                    ->sortable()
                    ->icon(Heroicon::UserCircle),
                IconColumn::make('has_email_authentication')
                    ->label('Email Auth')
                    ->boolean()
                    ->sortable(),
                TextColumn::make('email_verified_at')
                    ->label('Email Verification')
                    ->dateTime('M d, Y H:i')
                    ->sortable()
                    ->placeholder('Not verified')
                    ->toggleable(),
                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('M d, Y')
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->since()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                // Sensitive authentication fields
                TextColumn::make('app_authentication_secret')
                    ->label('Authentication Secret')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('app_authentication_recovery_codes')
                    ->label('Recovery Codes')
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
                    //
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
