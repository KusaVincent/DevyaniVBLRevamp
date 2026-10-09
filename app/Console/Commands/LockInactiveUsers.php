<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class LockInactiveUsers extends Command
{
    #[\Override]
    protected $signature = 'auth:lock-inactive-users {--days=30 : Days of inactivity before locking}';

    #[\Override]
    protected $description = 'Lock user accounts that have been inactive for 30 days or more';

    public function handle(): int
    {
        $days = (int) $this->option('days') ?: config('security.lockout.inactivity_days', 30);
        $cutoff = now()->subDays($days);
        $count = 0;

        User::query()
            ->whereNull('locked_at')
            ->where(function ($query) use ($cutoff): void {
                $query->where('last_active_at', '<=', $cutoff)
                    ->orWhere(function ($subQuery) use ($cutoff): void {
                        $subQuery->whereNull('last_active_at')
                            ->where('created_at', '<=', $cutoff);
                    });
            })
            ->chunkById(100, function ($users) use (&$count, $days): void {
                /** @var User $user */
                foreach ($users as $user) {
                    $user->lockAccount("Inactivity for {$days}+ days");
                    $count++;
                }
            });

        $this->info("Successfully locked {$count} inactive user account(s).");

        return self::SUCCESS;
    }
}
