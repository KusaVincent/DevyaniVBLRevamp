<?php

declare(strict_types=1);

namespace App\Filament\Resources\CustomerReferences\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CustomerReferenceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('reference')
                    ->required(),
                TextInput::make('mobile')
                    ->required(),
                TextInput::make('name')
                    ->required(),
            ]);
    }
}
