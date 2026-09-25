<?php

declare(strict_types=1);

namespace App\Filament\Resources\BusinessProfiles;

use App\Filament\Resources\BusinessProfiles\Pages\CreateBusinessProfile;
use App\Filament\Resources\BusinessProfiles\Pages\EditBusinessProfile;
use App\Filament\Resources\BusinessProfiles\Pages\ListBusinessProfiles;
use App\Filament\Resources\BusinessProfiles\Schemas\BusinessProfileForm;
use App\Filament\Resources\BusinessProfiles\Schemas\BusinessProfileInfolist;
use App\Filament\Resources\BusinessProfiles\Tables\BusinessProfilesTable;
use App\Models\BusinessProfile;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Override;
use Tapp\FilamentAuditing\RelationManagers\AuditsRelationManager;

class BusinessProfileResource extends Resource
{
    #[Override]
    protected static ?int $navigationSort = 2;
    #[Override]
    protected static ?string $model = BusinessProfile::class;
    #[Override]
    protected static ?string $modelLabel = 'Business Profile';
    #[Override]
    protected static ?string $navigationLabel = 'Business Profiles';
    #[Override]
    protected static ?string $pluralModelLabel = 'Business Profiles';
    #[Override]
    protected static string|null|\UnitEnum $navigationGroup = 'M-Pesa';
    #[Override]
    protected static ?string $recordTitleAttribute = 'business_short_code';
    #[Override]
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBuildingOffice2;

    public static function canViewAny(): bool
    {
        return true;
    }

    public static function canCreate(): bool
    {
        return auth()->user()?->can('manage-business-profiles') ?? false;
    }

    public static function canEdit($record): bool
    {
        return auth()->user()?->can('manage-business-profiles') ?? false;
    }

    public static function canDelete($record): bool
    {
        return auth()->user()?->can('manage-business-profiles') ?? false;
    }

    public static function form(Schema $schema): Schema
    {
        return BusinessProfileForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return BusinessProfileInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BusinessProfilesTable::configure($table);
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
            'index' => ListBusinessProfiles::route('/'),
            'create' => CreateBusinessProfile::route('/create'),
            'edit' => EditBusinessProfile::route('/{record}/edit'),
        ];
    }
}
