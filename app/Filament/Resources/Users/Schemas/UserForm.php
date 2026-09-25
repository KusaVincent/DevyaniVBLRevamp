<?php

declare(strict_types=1);

namespace App\Filament\Resources\Users\Schemas;

use App\Enum\UserRole;
use App\Enum\UserStatus;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class UserForm
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
                            ->options(UserStatus::class)
                            ->required()
                            ->native(false)
                            ->prefixIcon(Heroicon::UserCircle)
                            ->placeholder('Select a role'),
                    ])
                    ->columns(),
            ])
            ->columns(1);
    }
}
