<?php

declare(strict_types=1);

namespace App\Filament\Resources\BusinessTills;

use App\Filament\Resources\BusinessTills\Pages\CreateBusinessTill;
use App\Filament\Resources\BusinessTills\Pages\EditBusinessTill;
use App\Filament\Resources\BusinessTills\Pages\ListBusinessTills;
use App\Filament\Resources\BusinessTills\Schemas\BusinessTillForm;
use App\Filament\Resources\BusinessTills\Tables\BusinessTillsTable;
use App\Models\BusinessTill;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Override;

class BusinessTillResource extends Resource
{
    #[Override]
    protected static ?string $model = BusinessTill::class;

    #[Override]
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    #[Override]
    protected static ?string $recordTitleAttribute = 'till';

    public static function form(Schema $schema): Schema
    {
        return BusinessTillForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BusinessTillsTable::configure($table);
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
            'index' => ListBusinessTills::route('/'),
            'create' => CreateBusinessTill::route('/create'),
            'edit' => EditBusinessTill::route('/{record}/edit'),
        ];
    }
}
