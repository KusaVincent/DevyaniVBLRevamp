<?php

declare(strict_types=1);

namespace App\Filament\Resources\Users\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('User Profile')
                    ->description('Account information and access details.')
                    ->icon(Heroicon::UserCircle)
                    ->schema([
                        TextEntry::make('name')
                            ->label('Full Name')
                            ->icon(Heroicon::User)
                            ->weight('medium'),
                        TextEntry::make('email')
                            ->label('Email Address')
                            ->icon(Heroicon::Envelope)
                            ->copyable(),
                        TextEntry::make('role')
                            ->label('Role')
                            ->badge()
                            ->icon(Heroicon::UserGroup),
                        TextEntry::make('status')
                            ->badge()
                            ->icon(Heroicon::UserCircle),
                    ])
                    ->columns(),

                Section::make('Email Verification')
                    ->description('Verification status for the user account.')
                    ->icon(Heroicon::ShieldCheck)
                    ->schema([
                        IconEntry::make('has_email_authentication')
                            ->label('Email Authentication')
                            ->boolean(),
                        TextEntry::make('email_verified_at')
                            ->label('Verified At')
                            ->dateTime('M d, Y • H:i')
                            ->placeholder('Not verified')
                            ->icon(Heroicon::CheckBadge),
                        TextEntry::make('created_at')
                            ->label('Account Created')
                            ->dateTime('M d, Y • H:i')
                            ->icon(Heroicon::Calendar),
                        TextEntry::make('updated_at')
                            ->label('Last Updated')
                            ->dateTime('M d, Y • H:i')
                            ->icon(Heroicon::Clock),
                    ])
                    ->columns(),

                Section::make('Authentication & Security')
                    ->description('Sensitive authentication information.')
                    ->icon(Heroicon::LockClosed)
                    ->collapsed()
                    ->schema([
                        TextEntry::make('app_authentication_secret')
                            ->label('Authentication Secret')
                            ->placeholder('Not configured')
                            ->copyable()
                            ->fontFamily('mono'),

                        TextEntry::make('app_authentication_recovery_codes')
                            ->label('Recovery Codes')
                            ->placeholder('No recovery codes')
                            ->fontFamily('mono')
                            ->columnSpanFull(),
                    ]),
            ])
            ->columns(1);
    }
}
