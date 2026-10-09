<?php

declare(strict_types=1);

namespace App\Filament\Pages\Auth;

use App\Rules\NotInPasswordHistory;
use Filament\Auth\Pages\EditProfile as BaseEditProfile;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Enums\Width;
use Illuminate\Validation\Rules\Password;

final class Profile extends BaseEditProfile
{
    #[\Override]
    protected Width|string|null $maxContentWidth = Width::Full;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Account Information')
                    ->description('Your account information')
                    ->schema([
                        TextEntry::make('name')
                            ->label('Name')
                            ->default(fn () => auth()->user()?->name),

                        TextEntry::make('email')
                            ->label('Email')
                            ->copyable()
                            ->default(fn () => auth()->user()?->email),

                        TextEntry::make('role')
                            ->label('Role')
                            ->default(fn () => auth()->user()?->role?->getLabel()),

                        TextEntry::make('status')
                            ->label('Account Status')
                            ->default(fn () => auth()->user()?->status?->getLabel()),
                    ])
                    ->columns(2),

                Section::make('Change Password')
                    ->description('Update your account password')
                    ->schema([
                        TextInput::make('current_password')
                            ->label('Current password')
                            ->password()
                            ->revealable()
                            ->required()
                            ->currentPassword()
                            ->dehydrated(false),

                        TextInput::make('password')
                            ->label('New password')
                            ->password()
                            ->revealable()
                            ->required()
                            ->confirmed()
                            ->rule([
                                new NotInPasswordHistory(),
                                Password::min(8)
                                    ->letters()
                                    ->mixedCase()
                                    ->numbers()
                                    ->symbols()
                                    ->uncompromised(),
                            ]
                            )
                            ->different('current_password'),

                        TextInput::make('password_confirmation')
                            ->label('Confirm new password')
                            ->password()
                            ->revealable()
                            ->required()
                            ->same('password')
                            ->dehydrated(false),
                    ])
                    ->columns(3),
            ]);
    }
}
