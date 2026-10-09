<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\User;
use App\Notifications\PasswordExpiringNotification;
use Illuminate\Console\Command;

class SendPasswordExpirationReminders extends Command
{
    #[\Override]
    protected $signature = 'auth:send-password-expiration-reminders {--days=7 : Days before expiration to notify}';

    #[\Override]
    protected $description = 'Send email notifications to users whose passwords are expiring soon';

    public function handle(): int
    {
        $noticeDays = (int) $this->option('days');
        $count = 0;

        User::query()
            ->where('must_change_password', false)
            ->whereNotNull('password_changed_at')
            ->chunkById(100, function ($users) use ($noticeDays, &$count): void {
                /** @var User $user */
                foreach ($users as $user) {
                    if ($user->shouldSendPasswordExpirationReminder($noticeDays)) {
                        $daysRemaining = $user->daysUntilPasswordExpires();

                        $user->notify(new PasswordExpiringNotification($daysRemaining));

                        $user->update([
                            'password_expiry_reminder_sent_at' => now(),
                        ]);

                        $count++;
                    }
                }
            });

        $this->info("Successfully sent {$count} password expiration reminder(s).");

        return self::SUCCESS;
    }
}
