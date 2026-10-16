<?php

declare(strict_types=1);

namespace App\Filament\Resources\Users\Tables;

use App\Models\User;
use App\Notifications\AccountUnlockedNotification;
use App\Traits\HasDateFilters;
use Filament\Actions\Action;
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
            ->striped()
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->searchable()
                    ->label('User')
                    ->weight('bold')
                    ->icon(Heroicon::User)
                    ->description(fn (User $record): string => $record->email),

                TextColumn::make('email')
                    ->sortable()
                    ->copyable()
                    ->searchable()
                    ->toggleable()
                    ->label('Email Address')
                    ->icon(Heroicon::Envelope),

                TextColumn::make('role')
                    ->badge()
                    ->sortable()
                    ->searchable()
                    ->label('Role'),

                TextColumn::make('status')
                    ->badge()
                    ->sortable()
                    ->searchable()
                    ->label('Status'),

                TextColumn::make('locked_at')
                    ->badge()
                    ->sortable()
                    ->label('Account Lock')
                    ->placeholder('Not Locked')
                    ->icon(
                        fn ($state): Heroicon => $state !== null
                            ? Heroicon::LockClosed
                            : Heroicon::LockOpen
                    )
                    ->color(fn ($state): string => $state !== null ? 'danger' : 'success')
                    ->formatStateUsing(fn ($state): string => $state !== null ? 'Locked' : 'Unlocked')
                    ->description(fn (User $record): string => $record->locked_at?->diffForHumans() ?? 'Account available'),

                TextColumn::make('last_active_at')
                    ->since()
                    ->sortable()
                    ->toggleable()
                    ->icon(Heroicon::Clock)
                    ->label('Last Active')
                    ->placeholder('Never'),

                IconColumn::make('has_email_authentication')
                    ->boolean()
                    ->sortable()
                    ->toggleable()
                    ->label('Email MFA'),

                TextColumn::make('email_verified_at')
                    ->sortable()
                    ->toggleable()
                    ->label('Email Verified')
                    ->dateTime('d M Y, H:i')
                    ->icon(Heroicon::Envelope)
                    ->placeholder('Not verified')
                    ->description(fn (User $record): string => $record->email_verified_at?->diffForHumans() ?? 'Not verified'),

                TextColumn::make('created_at')
                    ->sortable()
                    ->toggleable()
                    ->label('Created')
                    ->dateTime('d M Y')
                    ->icon(Heroicon::CalendarDays)
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->since()
                    ->sortable()
                    ->label('Last Updated')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('lock_reason')
                    ->limit(50)
                    ->label('Lock Reason')
                    ->placeholder('No lock reason')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->tooltip(fn (User $record): ?string => $record->lock_reason),
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
                    ->trueLabel('Enabled')
                    ->falseLabel('Disabled')
                    ->label('Email Authentication')
                    ->placeholder('All users'),
            ])
            ->recordActions([
                ViewAction::make(),

                EditAction::make(),

                // Unlock account
                Action::make('unlock')
                    ->label('Unlock')
                    ->color('success')
                    ->requiresConfirmation()
                    ->icon(Heroicon::LockOpen)
                    ->modalHeading('Unlock User Account')
                    ->modalSubmitActionLabel('Unlock Account')
                    ->visible(fn (User $record): bool => $record->isLocked())
                    ->modalDescription(
                        fn (User $record): string => sprintf(
                            'Unlock %s? Lock reason: %s',
                            $record->name,
                            $record->lock_reason ?: 'No reason provided',
                        )
                    )
                    ->action(function (User $record): void {
                        $record->unlockAccount();
                        $record->notify(new AccountUnlockedNotification(auth()->user()?->name));
                        Notification::make()
                            ->send()
                            ->success()
                            ->title('Account Unlocked Successfully')
                            ->body("{$record->name}'s account is now unlocked. ".'An email notification has been dispatched.');
                    }),

                // Manually lock account
                Action::make('lock')
                    ->label('Lock')
                    ->color('danger')
                    ->requiresConfirmation()
                    ->icon(Heroicon::LockClosed)
                    ->modalHeading('Lock User Account')
                    ->modalSubmitActionLabel('Lock Account')
                    ->visible(fn (User $record): bool => ! $record->isLocked())
                    ->modalDescription(fn (User $record): string => "You are about to lock {$record->name}'s account.")
                    ->schema([
                        Textarea::make('lock_reason')
                            ->required()
                            ->maxLength(1000)
                            ->label('Reason for Lockout')
                            ->placeholder('e.g. Security audit, suspicious activity, administrative request'),
                    ])
                    ->action(function (User $record, array $data): void {
                        $record->lockAccount($data['lock_reason']);
                        Notification::make()
                            ->send()
                            ->warning()
                            ->title('Account Locked')
                            ->body("{$record->name}'s account has been manually locked.");
                    }),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
