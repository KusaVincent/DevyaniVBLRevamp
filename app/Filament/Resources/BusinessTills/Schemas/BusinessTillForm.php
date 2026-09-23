<?php

declare(strict_types=1);

namespace App\Filament\Resources\BusinessTills\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BusinessTillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('business_profile_id')
                    ->required()
                    ->numeric(),
                TextInput::make('till')
                    ->required(),
                TextInput::make('for'),
                TextInput::make('additional_details'),
            ]);
    }
}
