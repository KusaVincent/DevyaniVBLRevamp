<?php

declare(strict_types=1);

namespace App\Filament\Resources\ConfirmationTransactions;

use App\Filament\Resources\ConfirmationTransactions\Pages\ListConfirmationTransactions;
use App\Filament\Resources\ConfirmationTransactions\Tables\ConfirmationTransactionsTable;
use App\Models\ConfirmationTransaction;
use BackedEnum;
use Filament\Panel;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Override;
use Tapp\FilamentAuditing\RelationManagers\AuditsRelationManager;
use UnitEnum;

final class ConfirmationTransactionResource extends Resource
{
    #[Override]
    protected static ?int $navigationSort = 1;

    #[Override]
    protected static ?string $model = ConfirmationTransaction::class;

    #[Override]
    protected static string|null|UnitEnum $navigationGroup = 'M-Pesa';

    #[Override]
    protected static ?string $recordTitleAttribute = 'transaction_id';

    #[Override]
    protected static ?string $modelLabel = 'Received Transaction';

    #[Override]
    protected static ?string $navigationLabel = 'Received Transactions';

    #[Override]
    protected static ?string $pluralModelLabel = 'Received Transactions';

    #[Override]
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBanknotes;

    public static function getSlug(?Panel $panel = null): string
    {
        return 'received_transactions';
    }

    #[Override]
    public static function table(Table $table): Table
    {
        return ConfirmationTransactionsTable::configure($table);
    }

    #[Override]
    public static function getRelations(): array
    {
        return [
            AuditsRelationManager::class,
        ];
    }

    #[Override]
    public static function getPages(): array
    {
        return [
            'index' => ListConfirmationTransactions::route('/'),
        ];
    }
}
