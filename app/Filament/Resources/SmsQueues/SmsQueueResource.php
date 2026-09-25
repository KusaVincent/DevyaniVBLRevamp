<?php

declare(strict_types=1);

namespace App\Filament\Resources\SmsQueues;

use App\Filament\Resources\SmsQueues\Pages\ListSmsQueues;
use App\Filament\Resources\SmsQueues\Schemas\SmsQueueInfolist;
use App\Filament\Resources\SmsQueues\Tables\SmsQueuesTable;
use App\Models\SmsQueue;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Override;
use Tapp\FilamentAuditing\RelationManagers\AuditsRelationManager;
use UnitEnum;

class SmsQueueResource extends Resource
{
    #[Override]
    protected static ?int $navigationSort = 1;

    #[Override]
    protected static ?string $model = SmsQueue::class;

    #[Override]
    protected static ?string $navigationLabel = 'SMS Queue';

    #[Override]
    protected static string|null|UnitEnum $navigationGroup = 'Queues';

    #[Override]
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChatBubbleLeftRight;

    #[Override]
    protected static ?string $recordTitleAttribute = 'id';

    public static function infolist(Schema $schema): Schema
    {
        return SmsQueueInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SmsQueuesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            AuditsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSmsQueues::route('/'),
        ];
    }
}
