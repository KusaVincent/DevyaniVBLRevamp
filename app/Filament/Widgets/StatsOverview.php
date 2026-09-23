<?php

declare(strict_types=1);

namespace App\Filament\Widgets;

use App\Models\ConfirmationTransaction;
use Filament\Support\Colors\Color;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Carbon;
use Override;

class StatsOverview extends StatsOverviewWidget
{
    #[Override]
    protected static ?int $sort = 1;

    #[Override]
    protected int|array|null $columns = [
        'sm' => 1,
        'md' => 2,
        'lg' => 3,
        'xl' => 4,
    ];

    #[Override]
    protected ?string $pollingInterval = '60s';

    protected function getStats(): array
    {
        return [
            $this->createStat(
                "Today's Transactions Count",
                ConfirmationTransaction::class,
                'Transactions Count',
                Heroicon::CreditCard,
                Color::Orange,
            ),
        ];
    }

    private function createStat(
        string $label,
        string $modelClass,
        string $description,
        Heroicon $icon,
        array $color,
    ): Stat {
        $now = Carbon::now();

        $thirtyDaysAgo = $now->copy()->subDays(30);
        $sixtyDaysAgo = $now->copy()->subDays(60);

        $totalCount = $modelClass::count();

        $currentPeriodCount = $modelClass::where(
            'created_at',
            '>=',
            $thirtyDaysAgo,
        )->count();

        $previousPeriodCount = $modelClass::whereBetween(
            'created_at',
            [$sixtyDaysAgo, $thirtyDaysAgo],
        )->count();

        if ($previousPeriodCount === 0) {
            $trendPercent = $currentPeriodCount > 0 ? 100 : 0;
        } else {
            $trendPercent = (
                ($currentPeriodCount - $previousPeriodCount)
                / $previousPeriodCount
            ) * 100;
        }

        $isGrowth = $trendPercent >= 0;

        if (abs($trendPercent) >= 1000) {
            $formattedTrend = '99+';
        } else {
            $formattedTrend = number_format(abs($trendPercent), 1);
        }

        $trendText = $isGrowth
            ? "↑ {$formattedTrend}%"
            : "↓ {$formattedTrend}%";

        if ($previousPeriodCount === 0 && $currentPeriodCount > 0) {
            $trendText = 'New Growth';
        }

        $combinedDescription = "{$description} ({$trendText})";

        return Stat::make(
            $label,
            number_format($totalCount),
        )
            ->color($color)
            ->descriptionIcon($icon)
            ->description($combinedDescription)
            ->chart($this->getRealTrendData($modelClass))
            ->descriptionColor($isGrowth ? 'success' : 'danger');
    }

    private function getRealTrendData(string $modelClass): array
    {
        $data = $modelClass::where(
            'created_at',
            '>=',
            now()->subDays(6),
        )
            ->selectRaw('DATE(created_at) as date, count(*) as count')
            ->groupBy('date')
            ->pluck('count', 'date')
            ->toArray();

        return collect(range(6, 0))
            ->map(
                fn ($daysAgo) => $data[now()->subDays($daysAgo)->format('Y-m-d')] ?? 0
            )
            ->toArray();
    }
}
