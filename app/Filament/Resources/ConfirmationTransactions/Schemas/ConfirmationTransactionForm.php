<?php

declare(strict_types=1);

namespace App\Filament\Resources\ConfirmationTransactions\Schemas;

use App\Enum\ProcessSMSTxn;
use App\Enum\Status;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

final class ConfirmationTransactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('transaction_id')
                    ->required(),
                Select::make('status')
                    ->options(Status::class)
                    ->required(),
                TextInput::make('customer_name')
                    ->required(),
                TextInput::make('bill_reference')
                    ->required(),
                TextInput::make('amount')
                    ->required()
                    ->numeric(),
                TextInput::make('transaction_time')
                    ->required(),
                TextInput::make('business_short_code')
                    ->required(),
                Select::make('process')
                    ->options(ProcessSMSTxn::class)
                    ->required(),
            ]);
    }
}
