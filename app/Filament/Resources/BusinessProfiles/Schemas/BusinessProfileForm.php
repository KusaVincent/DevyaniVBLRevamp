<?php

declare(strict_types=1);

namespace App\Filament\Resources\BusinessProfiles\Schemas;

use App\Enum\BusinessProfileStatus;
use App\Enum\BusinessProfileType;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BusinessProfileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('business_short_code')
                    ->required(),
                Select::make('type')
                    ->options(BusinessProfileType::class)
                    ->required(),
                TextInput::make('username')
                    ->required(),
                TextInput::make('password')
                    ->password()
                    ->required(),
                Textarea::make('secret_key')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('credit_account')
                    ->required(),
                TextInput::make('sap_file')
                    ->required(),
                TextInput::make('business_transaction')
                    ->required(),
                TextInput::make('business_area')
                    ->required(),
                TextInput::make('profit_center')
                    ->required(),
                Select::make('active')
                    ->options(BusinessProfileStatus::class)
                    ->required(),
                Textarea::make('sap_headers')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
