<?php

declare(strict_types=1);

namespace App\Filament\Resources\BusinessTills\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class BusinessTillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Till Configuration')
                    ->description('Assign a till to a business profile.')
                    ->icon(Heroicon::DevicePhoneMobile)
                    ->schema([
                        Select::make('business_profile_id')
                            ->label('Business Profile')
                            ->relationship('businessProfile', 'business_short_code')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->native(false)
                            ->prefixIcon(Heroicon::BuildingOffice),

                        TextInput::make('till')
                            ->label('Till Number')
                            ->required()
                            ->maxLength(255)
                            ->prefixIcon(Heroicon::DevicePhoneMobile)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (?string $state, Set $set): void {
                                if (! empty($state)) {
                                    $set('cust_code', '8'.mb_trim($state));
                                }
                            }),

                        TextInput::make('cust_code')
                            ->label('Customer Code')
                            ->placeholder('e.g. 8.123456')
                            ->maxLength(255)
                            ->prefixIcon(Heroicon::Identification),

                        TextInput::make('for')
                            ->label('For')
                            ->placeholder('e.g. Customer payments')
                            ->maxLength(255)
                            ->prefixIcon(Heroicon::User),

                        Textarea::make('additional_details')
                            ->label('Additional Details')
                            ->rows(4)
                            ->placeholder('Add any additional information about this till...')
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),
            ]);
    }
}
