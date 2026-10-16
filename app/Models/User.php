<?php

declare(strict_types=1);

namespace App\Models;

use App\Enum\UserRole;
use App\Enum\UserStatus;
use Filament\Auth\MultiFactor\App\Concerns\InteractsWithAppAuthentication;
use Filament\Auth\MultiFactor\App\Concerns\InteractsWithAppAuthenticationRecovery;
use Filament\Auth\MultiFactor\App\Contracts\HasAppAuthentication;
use Filament\Auth\MultiFactor\App\Contracts\HasAppAuthenticationRecovery;
use Filament\Auth\MultiFactor\Email\Concerns\InteractsWithEmailAuthentication;
use Filament\Auth\MultiFactor\Email\Contracts\HasEmailAuthentication;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Override;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * @property mixed $must_change_password
 * @property mixed $last_active_at
 * @property mixed $lock_reason
 * @property mixed|null $role
 * @property mixed|null $status
 */
#[Guarded([])]
#[Hidden(['password', 'remember_token'])]
final class User extends Authenticatable implements Auditable, FilamentUser, HasAppAuthentication, HasAppAuthenticationRecovery, HasEmailAuthentication, MustVerifyEmail
{
    use InteractsWithAppAuthentication;
    use InteractsWithAppAuthenticationRecovery;
    use InteractsWithEmailAuthentication;
    use Notifiable;
    use \OwenIt\Auditing\Auditable;

    public ?string $plainTextPasswordForNotification = null;

    protected array $auditExclude = ['password', 'remember_token'];

    #[Override]
    protected $attributes = [
        'role' => UserRole::NORMAL,
        'status' => UserStatus::INACTIVE,
    ];

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->status === UserStatus::ACTIVE;
    }

    public function isAdmin(): bool
    {
        return $this->role === UserRole::ADMIN;
    }

    public function passwordHistories(): HasMany
    {
        return $this->hasMany(PasswordHistory::class);
    }

    public function recordPasswordHistory(string $plainPassword, int $keepHistoryCount = 3): void
    {
        $this->passwordHistories()->create([
            'password' => Hash::make($plainPassword),
        ]);

        // Keep only the last N password records
        $historyIdsToKeep = $this->passwordHistories()
            ->latest()
            ->take($keepHistoryCount)
            ->pluck('id');

        $this->passwordHistories()
            ->whereNotIn('id', $historyIdsToKeep)
            ->delete();
    }

    public function daysUntilPasswordExpires(int $policyDays = 30): int
    {
        if (! $this->password_changed_at) {
            return 0;
        }

        $expirationDate = $this->password_changed_at->addDays($policyDays);

        return (int) max(0, now()->diffInDays($expirationDate, false));
    }

    public function shouldSendPasswordExpirationReminder(int $noticeDays = 7): bool
    {
        $daysRemaining = $this->daysUntilPasswordExpires();

        if ($daysRemaining > $noticeDays || $daysRemaining <= 0) {
            return false;
        }

        // Don't resend if already notified within the current expiration window
        return ! $this->password_expiry_reminder_sent_at || ! $this->password_expiry_reminder_sent_at->gt(now()->subDays($noticeDays));
    }

    public function isLocked(): bool
    {
        return $this->locked_at !== null;
    }

    public function lockAccount(string $reason): void
    {
        $this->update([
            'locked_at' => now(),
            'lock_reason' => $reason,
        ]);
    }

    public function unlockAccount(): void
    {
        $this->update([
            'locked_at' => null,
            'lock_reason' => null,
        ]);
    }

    public function touchLastActive(): void
    {
        $this->updateQuietly([
            'last_active_at' => now(),
        ]);
    }

    public function isPasswordExpired(): bool
    {
        $daysLimit = config('security.password.expire_days', 30);

        if (! $this->password_changed_at) {
            return true;
        }

        return $this->password_changed_at->lessThan(now()->subDays($daysLimit));
    }

    /**
     * @return array<string, string>
     */
    #[Override]
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
            'locked_at' => 'datetime',
            'role' => UserRole::class,
            'status' => UserStatus::class,
            'last_active_at' => 'datetime',
            'email_verified_at' => 'datetime',
            'must_change_password' => 'boolean',
            'password_changed_at' => 'datetime',
            'has_email_authentication' => 'boolean',
            'password_expiry_reminder_sent_at' => 'datetime',
        ];
    }
}
