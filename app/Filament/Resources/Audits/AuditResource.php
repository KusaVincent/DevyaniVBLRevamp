<?php

declare(strict_types=1);

namespace App\Filament\Resources\Audits;

use App\Filament\Resources\Audits\Pages\ListAudits;
use Filament\Navigation\NavigationItem;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Models\Audit;

final class AuditResource extends Resource
{
    protected static ?string $model = Audit::class;

    protected static string|\BackedEnum|null $navigationIcon =
        Heroicon::OutlinedClipboardDocumentList;

    protected static ?string $navigationLabel = 'Audits';

    protected static ?string $modelLabel = 'Audit';

    protected static ?string $pluralModelLabel = 'Audits';

    protected static string|\UnitEnum|null $navigationGroup = 'Administration';

    protected static ?int $navigationSort = 2;

    public static function getNavigationGroup(): string
    {
        return 'Administration';
    }

    public static function shouldRegisterNavigation(): bool
    {
        return static::canViewAny();
    }

    public static function getNavigationItems(): array
    {
        if (! static::canViewAny()) {
            return [];
        }

        return [
            NavigationItem::make(static::getNavigationLabel())
                ->group('Administration')
                ->icon(static::getNavigationIcon())
                ->sort(static::getNavigationSort())
                ->url(static::getUrl('index')),
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
