<?php

declare(strict_types=1);

namespace App\Filament\Resources\CustomerReferences;

use App\Filament\Resources\CustomerReferences\Pages\CreateCustomerReference;
use App\Filament\Resources\CustomerReferences\Pages\EditCustomerReference;
use App\Filament\Resources\CustomerReferences\Pages\ListCustomerReferences;
use App\Filament\Resources\CustomerReferences\Schemas\CustomerReferenceForm;
use App\Filament\Resources\CustomerReferences\Schemas\CustomerReferenceInfolist;
use App\Filament\Resources\CustomerReferences\Tables\CustomerReferencesTable;
use App\Models\CustomerReference;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Override;
use Tapp\FilamentAuditing\RelationManagers\AuditsRelationManager;

class CustomerReferenceResource extends Resource
{
    #[Override]
    protected static ?int $navigationSort = 4;
    #[Override]
    protected static ?string $model = CustomerReference::class;
    #[Override]
    protected static ?string $navigationLabel = 'Customer References';
    #[Override]
    protected static string|null|\UnitEnum $navigationGroup = 'M-Pesa';
    #[Override]
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedIdentification;

    #[Override]
    protected static ?string $recordTitleAttribute = 'reference';

    public static function form(Schema $schema): Schema
    {
        return CustomerReferenceForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CustomerReferenceInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CustomerReferencesTable::configure($table);
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
            'index' => ListCustomerReferences::route('/'),
            'create' => CreateCustomerReference::route('/create'),
            'edit' => EditCustomerReference::route('/{record}/edit'),
        ];
    }
}
