<?php

declare(strict_types=1);

namespace App\Filament\Resources\EmailQueues;

use App\Filament\Resources\EmailQueues\Pages\CreateEmailQueue;
use App\Filament\Resources\EmailQueues\Pages\EditEmailQueue;
use App\Filament\Resources\EmailQueues\Pages\ListEmailQueues;
use App\Filament\Resources\EmailQueues\Schemas\EmailQueueForm;
use App\Filament\Resources\EmailQueues\Schemas\EmailQueueInfolist;
use App\Filament\Resources\EmailQueues\Tables\EmailQueuesTable;
use App\Models\EmailQueue;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Override;
use Tapp\FilamentAuditing\RelationManagers\AuditsRelationManager;

class EmailQueueResource extends Resource
{
    #[Override]
    protected static ?int $navigationSort = 2;
    #[Override]
    protected static ?string $model = EmailQueue::class;
    #[Override]
    protected static ?string $recordTitleAttribute = 'id';
    #[Override]
    protected static ?string $navigationLabel = 'Email Queue';
    #[Override]
    protected static string|null|\UnitEnum $navigationGroup = 'Queues';
    #[Override]
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedEnvelope;

    public static function infolist(Schema $schema): Schema
    {
        return EmailQueueInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EmailQueuesTable::configure($table);
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
            'index' => ListEmailQueues::route('/'),
        ];
    }
}
