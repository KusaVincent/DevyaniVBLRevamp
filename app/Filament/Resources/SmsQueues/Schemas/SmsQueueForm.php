<?php

namespace App\Filament\Resources\SmsQueues\Schemas;

use App\Enum\ProcessSMSTxn;
use App\Enum\Status;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SmsQueueForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('customer_name')
                    ->required(),
                TextInput::make('recipient_name')
                    ->required(),
                TextInput::make('recipient_mobile')
                    ->required(),
                Select::make('status')
                    ->options(Status::class)
                    ->required(),
                TextInput::make('amount')
                    ->required()
                    ->numeric(),
                TextInput::make('mpesa_ref')
                    ->required(),
                TextInput::make('bill_reference')
                    ->required(),
                Textarea::make('error')
                    ->columnSpanFull(),
                Textarea::make('response')
                    ->columnSpanFull(),
                Select::make('process')
                    ->options(ProcessSMSTxn::class)
                    ->required(),
                TextInput::make('attempts')
                    ->required()
                    ->numeric(),
                DateTimePicker::make('processed_at'),
                DateTimePicker::make('next_retry_at'),
            ]);
    }
}
