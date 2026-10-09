<?php

declare(strict_types=1);

namespace App\Filament\Pages\Auth;

use App\Models\User;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use Filament\Auth\Http\Responses\Contracts\LoginResponse;
use Filament\Auth\Pages\Login as BaseLogin;
use Illuminate\Validation\ValidationException;

class CustomLogin extends BaseLogin
{
    public function authenticate(): ?LoginResponse
    {
        $data = $this->form->getState();
        $user = User::where('email', $data['email'])->first();

        if ($user?->isLocked()) {
            throw ValidationException::withMessages([
                'data.email' => "Account locked: {$user->lock_reason}. Please contact support.",
            ]);
        }

        try {
            $this->rateLimit(3);
        } catch (TooManyRequestsException) {
            $user?->lockAccount('Locked due to 3 consecutive failed login attempts');

            throw ValidationException::withMessages([
                'data.email' => 'Too many failed login attempts. Your account has been locked. Contact support.',
            ]);
        }

        $response = parent::authenticate();

        auth()->user()?->touchLastActive();

        return $response;
    }
}
