<?php

namespace App\Filament\Resources\CustomerReferences;

use App\Filament\Resources\CustomerReferences\Pages\CreateCustomerReference;
use App\Filament\Resources\CustomerReferences\Pages\EditCustomerReference;
use App\Filament\Resources\CustomerReferences\Pages\ListCustomerReferences;
use App\Filament\Resources\CustomerReferences\Schemas\CustomerReferenceForm;
use App\Filament\Resources\CustomerReferences\Tables\CustomerReferencesTable;
use App\Models\CustomerReference;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CustomerReferenceResource extends Resource
{
    protected static ?string $model = CustomerReference::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'reference';

    public static function form(Schema $schema): Schema
    {
        return CustomerReferenceForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CustomerReferencesTable::configure($table);
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
            'index' => ListCustomerReferences::route('/'),
            'create' => CreateCustomerReference::route('/create'),
            'edit' => EditCustomerReference::route('/{record}/edit'),
        ];
    }
}
