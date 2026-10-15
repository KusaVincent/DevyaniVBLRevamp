<?php

declare(strict_types=1);

namespace App\Filament\Pages\Auth;

use App\Models\User;
use Filament\Auth\Http\Responses\Contracts\LoginResponse;
use Filament\Auth\Pages\Login as BaseLogin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class CustomLogin extends BaseLogin
{
    public function authenticate(): ?LoginResponse
    {
        $data = $this->form->getState();

        $user = User::where('email', $data['email'])->first();
        $credentialsValid = $user !== null && Hash::check($data['password'], $user->password);
        $key = 'login-failures:' . sha1(Str::lower($data['email']));

        if ($user?->isLocked()) {
            if ($credentialsValid) {
                throw ValidationException::withMessages([
                    'data.email' => "Account locked: {$user->lock_reason}. Please contact support.",
                ]);
            }

            // Wrong password on a locked account: same generic error as any failure.
            $this->throwFailureValidationException();
        }

        try {
            $response = parent::authenticate();
        } catch (ValidationException $e) {
            if ($user !== null && ! $credentialsValid) {
                $this->registerFailedAttempt($user, $key);
            }

            throw $e;
        }

        if ($credentialsValid) {
            RateLimiter::clear($key);
        }

        auth()->user()?->touchLastActive();

        return $response;
    }

    private function registerFailedAttempt(User $user, string $key): void
    {
        $maxFailedAttempts = max(1, (int) config('auth.custom.max_failed_attempts', 3));
        $failureWindowSeconds = max(1, (int) config('auth.custom.failure_window_seconds', 900));

        $attempts = RateLimiter::hit($key, $failureWindowSeconds);

        if ($attempts >= $maxFailedAttempts) {
            $user->lockAccount('Locked due to ' . $maxFailedAttempts . ' consecutive failed login attempts');
            RateLimiter::clear($key);
        }
    }
}
