<?php

declare(strict_types=1);

namespace App\Filament\Resources\Audits;

use App\Filament\Resources\Audits\Pages\ListAudits;
use BackedEnum;
use Filament\Navigation\NavigationItem;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Illuminate\Database\Eloquent\Model;
use Override;
use OwenIt\Auditing\Models\Audit;
use UnitEnum;

final class AuditResource extends Resource
{
    #[Override]
    protected static ?string $model = Audit::class;

    #[Override]
    protected static string|BackedEnum|null $navigationIcon =
        Heroicon::OutlinedClipboardDocumentList;

    #[Override]
    protected static ?string $navigationLabel = 'Audits';

    #[Override]
    protected static ?string $modelLabel = 'Audit';

    #[Override]
    protected static ?string $pluralModelLabel = 'Audits';

    #[Override]
    protected static string|UnitEnum|null $navigationGroup = 'Administration';

    #[Override]
    protected static ?int $navigationSort = 2;

    public static function getNavigationGroup(): string
    {
        return 'Administration';
    }

    public static function shouldRegisterNavigation(): bool
    {
        return self::canViewAny();
    }

    public static function getNavigationItems(): array
    {
        if (! self::canViewAny()) {
            return [];
        }

        return [
            NavigationItem::make(self::getNavigationLabel())
                ->group('Administration')
                ->icon(self::getNavigationIcon())
                ->sort(self::getNavigationSort())
                ->url(self::getUrl('index')),
        ];
    }

    public static function canViewAny(): bool
    {
        return auth()->check() && auth()->user()->isAdmin();
    }

    public static function canView(Model $record): bool
    {
        return auth()->check() && auth()->user()->isAdmin();
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canEdit(Model $record): bool
    {
        return false;
    }

    public static function canDelete(Model $record): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAudits::route('/'),
        ];
    }
}
