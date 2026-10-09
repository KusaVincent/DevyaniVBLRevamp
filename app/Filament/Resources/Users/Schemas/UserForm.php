<?php

declare(strict_types=1);

namespace App\Filament\Resources\Users\Schemas;

use App\Enum\UserRole;
use App\Enum\UserStatus;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

final class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('User Information')
                    ->description('Manage the user’s account details and access level.')
                    ->icon(Heroicon::UserCircle)
                    ->schema([
                        TextInput::make('name')
                            ->label('Full name')
                            ->placeholder('John Doe')
                            ->required()
                            ->maxLength(255)
                            ->prefixIcon(Heroicon::User),
                        TextInput::make('email')
                            ->label('Email address')
                            ->placeholder('john@example.com')
                            ->email()
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->prefixIcon(Heroicon::Envelope),
                        Select::make('role')
                            ->label('User role')
                            ->options(UserRole::class)
                            ->required()
                            ->native(false)
                            ->prefixIcon(Heroicon::UserGroup)
                            ->placeholder('Select a role'),
                        Select::make('status')
                            ->label('Account status')
                            ->options(UserStatus::class)
                            ->required()
                            ->native(false)
                            ->prefixIcon(Heroicon::UserCircle)
                            ->placeholder('Select a status'),
                        TextInput::make('password')
                            ->password()
                            ->revealable()
                            ->label('Password')
                            ->prefixIcon(Heroicon::Key)
                            ->autocomplete('new-password')
                            ->dehydrated(fn (?string $state): bool => filled($state))
//                            ->required(fn (string $operation): bool => $operation === 'create')
                            ->helperText('Leave empty to auto-generate a secure temporary password and email it to the user.'),

                        Toggle::make('must_change_password')
                            ->default(true)
                            ->label('Force Password Change on Next Login'),
                    ])
                    ->columns(),
            ])
            ->columns(1);
    }
}
