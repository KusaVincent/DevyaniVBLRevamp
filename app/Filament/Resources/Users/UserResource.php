<?php

declare(strict_types=1);

namespace App\Filament\Resources\Users;

use App\Filament\Resources\Users\Pages\CreateUser;
use App\Filament\Resources\Users\Pages\EditUser;
use App\Filament\Resources\Users\Pages\ListUsers;
use App\Filament\Resources\Users\Schemas\UserForm;
use App\Filament\Resources\Users\Schemas\UserInfolist;
use App\Filament\Resources\Users\Tables\UsersTable;
use App\Models\User;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Override;
use Tapp\FilamentAuditing\RelationManagers\AuditsRelationManager;
use UnitEnum;

class UserResource extends Resource
{
    #[Override]
    protected static ?int $navigationSort = 1;

    #[Override]
    protected static ?string $model = User::class;

    #[Override]
    protected static ?string $navigationLabel = 'Users';

    #[Override]
    protected static ?string $recordTitleAttribute = 'name';

    #[Override]
    protected static string|null|UnitEnum $navigationGroup = 'Administration';

    #[Override]
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUsers;

    public static function canViewAny(): bool
    {
        return auth()->user()?->can('manage-users') ?? false;
    }

    public static function canCreate(): bool
    {
        return auth()->user()?->can('manage-users') ?? false;
    }

    public static function canEdit($record): bool
    {
        return auth()->user()?->can('manage-users') ?? false;
    }

    public static function canDelete($record): bool
    {
        return auth()->user()?->can('manage-users') ?? false;
    }

    public static function form(Schema $schema): Schema
    {
        return UserForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return UserInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UsersTable::configure($table);
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
            'index' => ListUsers::route('/'),
            'create' => CreateUser::route('/create'),
            'edit' => EditUser::route('/{record}/edit'),
        ];
    }
}
