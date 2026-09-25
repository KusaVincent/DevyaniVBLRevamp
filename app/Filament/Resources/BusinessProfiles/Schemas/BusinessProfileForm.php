<?php

declare(strict_types=1);

namespace App\Filament\Resources\BusinessProfiles\Schemas;

use App\Enum\BusinessProfileStatus;
use App\Enum\BusinessProfileType;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use InvalidArgumentException;

class BusinessProfileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(3)
                    ->schema([
                        Section::make('Business Profile')
                            ->description('Basic business configuration.')
                            ->icon(Heroicon::BuildingOffice)
                            ->schema([
                                TextInput::make('business_short_code')
                                    ->label('Business Short Code')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->prefixIcon(Heroicon::Hashtag),
                                Select::make('type')
                                    ->label('Business Type')
                                    ->options(BusinessProfileType::class)
                                    ->required()
                                    ->native(false)
                                    ->searchable()
                                    ->prefixIcon(Heroicon::BuildingOffice),
                                Select::make('active')
                                    ->options(BusinessProfileStatus::class)
                                    ->required()
                                    ->native(false)
                                    ->prefixIcon(Heroicon::Signal),
                                TextInput::make('username')
                                    ->label('Username')
                                    ->required()
                                    ->prefixIcon(Heroicon::User),
                                TextInput::make('credit_account')
                                    ->label('Credit Account')
                                    ->required()
                                    ->prefixIcon(Heroicon::Banknotes),
                            ])
                            ->columns(2)
                            ->columnSpan(2),

                        Section::make('Authentication')
                            ->description('Integration credentials.')
                            ->icon(Heroicon::LockClosed)
                            ->schema([
                                TextInput::make('password')
                                    ->label('Password')
                                    ->password()
                                    ->revealable()
                                    ->required(fn (string $operation): bool => $operation === 'create')
                                    ->dehydrated(fn (?string $state): bool => filled($state))
                                    ->autocomplete('new-password')
                                    ->prefixIcon(Heroicon::Key),
                                Textarea::make('secret_key')
                                    ->label('Secret Key')
                                    ->required(fn (string $operation): bool => $operation === 'create')
                                    ->dehydrated(fn (?string $state): bool => filled($state))
                                    ->autocomplete('off')
                                    ->rows(5)
                                    ->helperText('Leave empty to keep the existing secret.'),
                            ])
                            ->columnSpan(1)
                            ->collapsible(),

                        Section::make('SAP Configuration')
                            ->description('SAP integration and transaction settings.')
                            ->icon(Heroicon::Server)
                            ->schema([
                                TextInput::make('sap_file')
                                    ->label('SAP File')
                                    ->required()
                                    ->prefixIcon(Heroicon::Document),
                                TextInput::make('business_transaction')
                                    ->label('Business Transaction')
                                    ->required()
                                    ->prefixIcon(Heroicon::ArrowsRightLeft),
                                TextInput::make('business_area')
                                    ->label('Business Area')
                                    ->required(),
                                TextInput::make('profit_center')
                                    ->label('Profit Center')
                                    ->required(),
                                Textarea::make('sap_headers')
                                    ->label('SAP Headers')
                                    ->required()
                                    ->rows(8)
                                    ->formatStateUsing(function ($state): string {
                                        if (blank($state)) {
                                            return '';
                                        }

                                        if (is_string($state)) {
                                            $decoded = json_decode($state, true);

                                            return json_last_error() === JSON_ERROR_NONE
                                                ? json_encode(
                                                    $decoded,
                                                    JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
                                                )
                                                : $state;
                                        }

                                        return json_encode(
                                            $state,
                                            JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
                                        );
                                    })
                                    ->dehydrateStateUsing(function ($state): array {
                                        if (blank($state)) {
                                            return [];
                                        }

                                        $decoded = json_decode($state, true);

                                        if (json_last_error() !== JSON_ERROR_NONE) {
                                            throw new InvalidArgumentException(
                                                'SAP Headers must contain valid JSON.'
                                            );
                                        }
                                        return $decoded;
                                    })
                                    ->helperText('Enter valid JSON.')
                                    ->columnSpanFull(),
                            ])
                            ->columns()
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
