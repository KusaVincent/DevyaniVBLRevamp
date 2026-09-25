<?php

declare(strict_types=1);

namespace App\Filament\Resources\CustomerReferences\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class CustomerReferenceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Customer Information')
                    ->description('Customer reference and contact details.')
                    ->icon(Heroicon::UserCircle)
                    ->schema([
                        TextInput::make('reference')
                            ->label('Customer Reference')
                            ->placeholder('e.g. CUST-000001')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255)
                            ->prefixIcon(Heroicon::Hashtag),
                        TextInput::make('name')
                            ->label('Customer Name')
                            ->placeholder('John Doe')
                            ->required()
                            ->maxLength(255)
                            ->prefixIcon(Heroicon::User),
                        TextInput::make('mobile')
                            ->label('Mobile Number')
                            ->placeholder('+254 7XX XXX XXX')
                            ->required()
                            ->tel()
                            ->maxLength(255)
                            ->prefixIcon(Heroicon::Phone),
                    ])
                    ->columns(3)
                    ->columnSpanFull(),
            ]);
    }
}
