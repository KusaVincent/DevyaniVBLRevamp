<?php

namespace App\Filament\Resources\ConfirmationTransactions;

use App\Filament\Resources\ConfirmationTransactions\Pages\CreateConfirmationTransaction;
use App\Filament\Resources\ConfirmationTransactions\Pages\EditConfirmationTransaction;
use App\Filament\Resources\ConfirmationTransactions\Pages\ListConfirmationTransactions;
use App\Filament\Resources\ConfirmationTransactions\Schemas\ConfirmationTransactionForm;
use App\Filament\Resources\ConfirmationTransactions\Tables\ConfirmationTransactionsTable;
use App\Models\ConfirmationTransaction;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ConfirmationTransactionResource extends Resource
{
    protected static ?string $model = ConfirmationTransaction::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return ConfirmationTransactionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ConfirmationTransactionsTable::configure($table);
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
            'index' => ListConfirmationTransactions::route('/'),
            'create' => CreateConfirmationTransaction::route('/create'),
            'edit' => EditConfirmationTransaction::route('/{record}/edit'),
        ];
    }
}
