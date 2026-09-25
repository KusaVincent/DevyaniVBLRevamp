<?php

declare(strict_types=1);

namespace App\Filament\Widgets;

use App\Enum\Status;
use App\Models\ConfirmationTransaction;
use App\Models\EmailQueue;
use App\Models\SmsQueue;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Carbon;
use Override;

final class StatsOverview extends StatsOverviewWidget
{
    #[Override]
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $today = Carbon::today();

        $receivedToday = ConfirmationTransaction::query()
            ->whereDate('created_at', $today)
            ->count();

        $processedToday = ConfirmationTransaction::query()
            ->whereDate('created_at', $today)
            ->where('status', Status::PROCESSED)
            ->count();

        $failedToday = ConfirmationTransaction::query()
            ->whereDate('created_at', $today)
            ->where('status', Status::FAILED)
            ->count();

        $pendingTransactions = ConfirmationTransaction::query()
            ->where('status', Status::PENDING)
            ->count();

        $pendingSms = SmsQueue::query()
            ->where('status', Status::PENDING)
            ->count();

        $pendingEmail = EmailQueue::query()
            ->where('status', Status::PENDING)
            ->count();

        $retryingSms = SmsQueue::query()
            ->whereNotNull('next_retry_at')
            ->where('next_retry_at', '>', now())
            ->count();

        $retryingEmail = EmailQueue::query()
            ->whereNotNull('next_retry_at')
            ->where('next_retry_at', '>', now())
            ->count();

        $transactionValueToday = ConfirmationTransaction::query()
            ->whereDate('created_at', $today)
            ->sum('amount');

        $processedValueToday = ConfirmationTransaction::query()
            ->whereDate('created_at', $today)
            ->where('status', Status::PROCESSED)
            ->sum('amount');

        $successRate = $receivedToday > 0
            ? round(($processedToday / $receivedToday) * 100, 1)
            : 0;

        return [
            Stat::make(
                'Received Today',
                number_format($receivedToday)
            )
                ->description($today->format('D, M j, Y'))
                ->descriptionIcon('heroicon-m-arrow-down-tray')
                ->icon('heroicon-o-banknotes')
                ->color('primary')
                ->url(
                    \App\Filament\Resources\ConfirmationTransactions\ConfirmationTransactionResource::getUrl(
                        'index'
                    )
                ),

            Stat::make(
                'Processed Today',
                number_format($processedToday)
            )
                ->description('Successfully processed')
                ->descriptionIcon('heroicon-m-check-circle')
                ->icon('heroicon-o-check-circle')
                ->color('success'),

            Stat::make(
                'Pending Transactions',
                number_format($pendingTransactions)
            )
                ->description('Awaiting processing')
                ->descriptionIcon('heroicon-m-clock')
                ->icon('heroicon-o-clock')
                ->color($pendingTransactions > 0 ? 'warning' : 'success'),

            Stat::make(
                'Pending SMS',
                number_format($pendingSms)
            )
                ->description('Awaiting delivery')
                ->descriptionIcon('heroicon-m-chat-bubble-left-right')
                ->icon('heroicon-o-chat-bubble-left-right')
                ->color($pendingSms > 0 ? 'warning' : 'success')
                ->url(
                    \App\Filament\Resources\SmsQueues\SmsQueueResource::getUrl(
                        'index'
                    )
                ),

            Stat::make(
                'Pending Email',
                number_format($pendingEmail)
            )
                ->description('Awaiting delivery')
                ->descriptionIcon('heroicon-m-envelope')
                ->icon('heroicon-o-envelope')
                ->color($pendingEmail > 0 ? 'warning' : 'success')
                ->url(
                    \App\Filament\Resources\EmailQueues\EmailQueueResource::getUrl(
                        'index'
                    )
                ),

            Stat::make(
                'Failed Today',
                number_format($failedToday)
            )
                ->description('Transactions requiring attention')
                ->descriptionIcon('heroicon-m-exclamation-triangle')
                ->icon('heroicon-o-x-circle')
                ->color($failedToday > 0 ? 'danger' : 'success'),

            Stat::make(
                'Success Rate',
                number_format($successRate, 1).'%'
            )
                ->description("Today's processing rate")
                ->descriptionIcon('heroicon-m-chart-bar')
                ->icon('heroicon-o-chart-bar')
                ->color(
                    $successRate >= 95
                        ? 'success'
                        : ($successRate >= 80 ? 'warning' : 'danger')
                ),

            Stat::make(
                "Today's Value",
                'KES '.number_format((float) $transactionValueToday, 2)
            )
                ->description(
                    'Processed: KES '.
                    number_format((float) $processedValueToday, 2)
                )
                ->descriptionIcon('heroicon-m-banknotes')
                ->icon('heroicon-o-currency-dollar')
                ->color('primary'),

            Stat::make(
                'Scheduled Retries',
                number_format($retryingSms + $retryingEmail)
            )
                ->description(
                    $retryingSms.' SMS · '.
                    $retryingEmail.' Email'
                )
                ->descriptionIcon('heroicon-m-arrow-path')
                ->icon('heroicon-o-arrow-path')
                ->color(
                    ($retryingSms + $retryingEmail) > 0
                        ? 'warning'
                        : 'success'
                ),
        ];
    }
}
