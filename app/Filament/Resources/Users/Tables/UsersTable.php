<?php

declare(strict_types=1);

namespace App\Filament\Resources\Users\Tables;

use App\Models\User;
use App\Notifications\AccountUnlockedNotification;
use App\Traits\HasDateFilters;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\Textarea;
use Filament\Notifications\Notification;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class UsersTable
{
    use HasDateFilters;

    public static function configure(Table $table): Table
    {
        return $table
            ->defaultPaginationPageOption(25)
            ->paginationPageOptions([10, 25, 50, 100])
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

                // Lockout Status Indicator Column
                TextColumn::make('locked_at')
                    ->label('Account Lock')
                    ->badge()
                    ->formatStateUsing(fn ($state): string => $state ? 'Locked' : 'Active')
                    ->color(fn ($state): string => $state ? 'danger' : 'success')
                    ->icon(fn ($state): \Filament\Support\Icons\Heroicon => $state ? Heroicon::LockClosed : Heroicon::LockOpen)
                    ->sortable(),

                TextColumn::make('last_active_at')
                    ->label('Last Active')
                    ->since()
                    ->placeholder('Never')
                    ->sortable()
                    ->toggleable(),

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

                // Sensitive authentication & lockout reason fields
                TextColumn::make('lock_reason')
                    ->label('Lock Reason')
                    ->placeholder('None')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('app_authentication_secret')
                    ->label('Authentication Secret')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('app_authentication_recovery_codes')
                    ->label('Recovery Codes')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TernaryFilter::make('is_locked')
                    ->label('Account Lock Status')
                    ->placeholder('All accounts')
                    ->trueLabel('Locked accounts only')
                    ->falseLabel('Unlocked accounts only')
                    ->queries(
                        true: fn (Builder $query) => $query->whereNotNull('locked_at'),
                        false: fn (Builder $query) => $query->whereNull('locked_at'),
                    ),

                TernaryFilter::make('has_email_authentication')
                    ->label('Email Authentication Enabled'),

                self::getDateFilter('created_at', 'Created Date Range'),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),

                // UNLOCK ACCOUNT ACTION
                Action::make('unlock')
                    ->label('Unlock')
                    ->icon(Heroicon::LockOpen)
                    ->color('success')
                    ->visible(fn (User $record): bool => $record->isLocked())
                    ->requiresConfirmation()
                    ->modalHeading('Unlock User Account')
                    ->modalDescription(fn (User $record): string => "Are you sure you want to unlock {$record->name}? Reason for lock: \"{$record->lock_reason}\"")
                    ->action(function (User $record): void {
                        $record->unlockAccount();

                        // Send unlock notification
                        $record->notify(new AccountUnlockedNotification(auth()->user()?->name));

                        Notification::make()
                            ->title('Account Unlocked Successfully')
                            ->body("{$record->name}'s account is now active and a notification email has been sent.")
                            ->success()
                            ->send();
                    }),

                // MANUAL LOCK ACCOUNT ACTION
                Action::make('lock')
                    ->label('Lock')
                    ->icon(Heroicon::LockClosed)
                    ->color('danger')
                    ->hidden(fn (User $record): bool => $record->isLocked())
                    ->requiresConfirmation()
                    ->modalHeading('Lock User Account')
                    ->form([
                        Textarea::make('lock_reason')
                            ->label('Reason for Lockout')
                            ->placeholder('e.g., Security audit, suspicious activity, administrative request')
                            ->required(),
                    ])
                    ->action(function (User $record, array $data): void {
                        $record->lockAccount($data['lock_reason']);

                        Notification::make()
                            ->title('Account Locked')
                            ->body("{$record->name}'s account has been manually locked.")
                            ->warning()
                            ->send();
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
