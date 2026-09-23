<?php

declare(strict_types=1);

namespace App\Filament\Resources\EmailQueues;

use App\Filament\Resources\EmailQueues\Pages\CreateEmailQueue;
use App\Filament\Resources\EmailQueues\Pages\EditEmailQueue;
use App\Filament\Resources\EmailQueues\Pages\ListEmailQueues;
use App\Filament\Resources\EmailQueues\Schemas\EmailQueueForm;
use App\Filament\Resources\EmailQueues\Tables\EmailQueuesTable;
use App\Models\EmailQueue;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Override;

class EmailQueueResource extends Resource
{
    #[Override]
    protected static ?string $model = EmailQueue::class;

    #[Override]
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    #[Override]
    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return EmailQueueForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EmailQueuesTable::configure($table);
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
            'index' => ListEmailQueues::route('/'),
            'create' => CreateEmailQueue::route('/create'),
            'edit' => EditEmailQueue::route('/{record}/edit'),
        ];
    }
}
