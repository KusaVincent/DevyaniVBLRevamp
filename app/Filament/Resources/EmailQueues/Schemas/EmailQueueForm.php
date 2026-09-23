<?php

declare(strict_types=1);

namespace App\Filament\Resources\EmailQueues\Schemas;

use App\Enum\Status;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EmailQueueForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('subject')
                    ->required(),
                TextInput::make('header')
                    ->required(),
                TextInput::make('message')
                    ->required(),
                TextInput::make('attachment')
                    ->required(),
                Textarea::make('recipients')
                    ->required()
                    ->columnSpanFull(),
                Select::make('status')
                    ->options(Status::class)
                    ->required(),
                TextInput::make('attempts')
                    ->required()
                    ->numeric(),
                DateTimePicker::make('next_retry_at'),
                DateTimePicker::make('processed_at'),
                Textarea::make('response')
                    ->columnSpanFull(),
                Textarea::make('error')
                    ->columnSpanFull(),
            ]);
    }
}
