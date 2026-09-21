<?php

namespace App\Filament\Resources\SmsQueues;

use App\Filament\Resources\SmsQueues\Pages\CreateSmsQueue;
use App\Filament\Resources\SmsQueues\Pages\EditSmsQueue;
use App\Filament\Resources\SmsQueues\Pages\ListSmsQueues;
use App\Filament\Resources\SmsQueues\Schemas\SmsQueueForm;
use App\Filament\Resources\SmsQueues\Tables\SmsQueuesTable;
use App\Models\SmsQueue;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SmsQueueResource extends Resource
{
    protected static ?string $model = SmsQueue::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return SmsQueueForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SmsQueuesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSmsQueues::route('/'),
            'create' => CreateSmsQueue::route('/create'),
            'edit' => EditSmsQueue::route('/{record}/edit'),
        ];
    }
}
