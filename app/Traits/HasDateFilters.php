<?php

declare(strict_types=1);

namespace App\Traits;

use Filament\Forms\Components\DatePicker;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

trait HasDateFilters
{
    public static function getDateFilter(string $column = 'created_at', string $label = 'Date Range', ?int $defaultDays = 3): Filter
    {
        $prefix = str($column)->replace('.', '_')->toString();

        return Filter::make($column)
            ->label($label)
            ->schema([
                DatePicker::make("{$prefix}_from")
                    ->label("{$label} — From")
                    ->default(fn (): string => Carbon::now()
                        ->subDays($defaultDays ?? 3)->toDateString()
                    ),

                DatePicker::make("{$prefix}_until")
                    ->label("{$label} — Until")
                    ->default(fn (): string => Carbon::now()->toDateString()),
            ])
            ->query(
                fn (Builder $query, array $data): Builder => $query
                    ->when($data["{$prefix}_from"] ?? null, fn (Builder $query, $date): Builder => $query->whereDate($column, '>=', $date),
                    )
                    ->when($data["{$prefix}_until"] ?? null, fn (Builder $query, $date): Builder => $query->whereDate($column, '<=', $date),
                    )
            );
    }
}
