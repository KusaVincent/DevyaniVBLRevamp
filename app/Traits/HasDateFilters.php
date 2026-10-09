<?php

declare(strict_types=1);

namespace App\Traits;

use Filament\Forms\Components\DatePicker;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

trait HasDateFilters
{
    public static function getDateFilter(string $column = 'created_at', string $label = 'Date Range', ?int $defaultDays = null): Filter
    {
        $prefix = str($column)->replace('.', '_')->toString();

        return Filter::make($column)
            ->label($label)
            ->schema([
                DatePicker::make("{$prefix}_from")
                    ->label("{$label} — From")
                    ->default(
                        $defaultDays !== null
                            ? fn (): string => Carbon::now()->subDays($defaultDays)->toDateString()
                            : null
                    ),
                DatePicker::make("{$prefix}_until")
                    ->label("{$label} — Until"),
            ])
            ->query(fn(Builder $query, array $data): Builder => $query
                ->when(
                    $data["{$prefix}_from"] ?? null,
                    fn (Builder $query, $date): Builder => $query->whereDate($column, '>=', $date),
                )
                ->when(
                    $data["{$prefix}_until"] ?? null,
                    fn (Builder $query, $date): Builder => $query->whereDate($column, '<=', $date),
                ));
    }
}
