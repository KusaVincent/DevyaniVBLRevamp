<?php

declare(strict_types=1);

namespace App\Rules;

use App\Models\PasswordHistory;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

final readonly class NotInPasswordHistory implements ValidationRule
{
    public function __construct(private int $checkCount = 3)
    {
        //
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $userId = Auth::id();

        if (! $userId || ! is_string($value) || $value === '') {
            return;
        }

        $recentPasswords = PasswordHistory::query()
            ->where('user_id', $userId)
            ->latest('created_at')
            ->limit($this->checkCount)
            ->pluck('password');

        foreach ($recentPasswords as $oldHash) {
            if (Hash::check($value, $oldHash)) {
                $fail("You cannot reuse any of your last {$this->checkCount} passwords.");

                return;
            }
        }
    }
}
