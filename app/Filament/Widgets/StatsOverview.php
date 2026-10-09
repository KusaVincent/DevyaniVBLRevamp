<?php

declare(strict_types=1);

namespace App\Filament\Widgets;

use App\Enum\Status;
use App\Filament\Resources\ConfirmationTransactions\ConfirmationTransactionResource;
use App\Filament\Resources\EmailQueues\EmailQueueResource;
use App\Filament\Resources\SmsQueues\SmsQueueResource;
use App\Models\ConfirmationTransaction;
use App\Models\EmailQueue;
use App\Models\SmsQueue;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Carbon;
use Override;

final class StatsOverview extends StatsOverviewWidget
{
    #[Override]
    protected static ?int $sort = 1;

    #[Override]
    protected ?string $pollingInterval = '60s';

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
            Stat::make('Received Today', number_format($receivedToday))
                ->color('primary')
                ->icon(Heroicon::OutlinedBanknotes)
                ->descriptionIcon(Heroicon::ArrowDownTray)
                ->description($today->format('D, M j, Y'))
                ->url(ConfirmationTransactionResource::getUrl('index')),

            Stat::make('Processed Today', number_format($processedToday))
                ->color('success')
                ->icon(Heroicon::OutlinedCheckCircle)
                ->descriptionIcon(Heroicon::CheckCircle)
                ->description('Successfully processed'),

            Stat::make('Pending Transactions', number_format($pendingTransactions))
                ->icon(Heroicon::OutlinedClock)
                ->descriptionIcon(Heroicon::Clock)
                ->description('Awaiting processing')
                ->color($pendingTransactions > 0 ? 'warning' : 'success'),

            Stat::make('Pending SMS', number_format($pendingSms))
                ->description('Awaiting delivery')
                ->url(SmsQueueResource::getUrl('index'))
                ->icon(Heroicon::OutlinedChatBubbleLeftRight)
                ->descriptionIcon(Heroicon::ChatBubbleLeftRight)
                ->color($pendingSms > 0 ? 'warning' : 'success'),

            Stat::make('Pending Email', number_format($pendingEmail))
                ->icon(Heroicon::OutlinedEnvelope)
                ->descriptionIcon(Heroicon::Envelope)
                ->description('Awaiting delivery')
                ->url(EmailQueueResource::getUrl('index'))
                ->color($pendingEmail > 0 ? 'warning' : 'success'),

            Stat::make('Failed Today', number_format($failedToday))
                ->description('Transactions requiring attention')
                ->icon(Heroicon::OutlinedXCircle)
                ->descriptionIcon(Heroicon::ExclamationTriangle)
                ->color($failedToday > 0 ? 'danger' : 'success'),

            Stat::make('Success Rate', number_format($successRate, 1).'%')
                ->description("Today's processing rate")
                ->icon(Heroicon::OutlinedChartBar)
                ->descriptionIcon(Heroicon::ChartBar)
                ->color($successRate >= 95 ? 'success' : ($successRate >= 80 ? 'warning' : 'danger')),

            Stat::make("Today's Value", 'KES '.number_format((float) $transactionValueToday, 2))
                ->description('Processed: KES '.number_format((float) $processedValueToday, 2))
                ->descriptionIcon(Heroicon::Banknotes)
                ->icon(Heroicon::OutlinedCurrencyDollar)
                ->color('primary'),

            Stat::make('Scheduled Retries', number_format($retryingSms + $retryingEmail))
                ->icon(Heroicon::OutlinedArrowPath)
                ->descriptionIcon(Heroicon::ArrowPath)
                ->description($retryingSms.' SMS · '.$retryingEmail.' Email')
                ->color(($retryingSms + $retryingEmail) > 0 ? 'warning' : 'success'),
        ];
    }
}
