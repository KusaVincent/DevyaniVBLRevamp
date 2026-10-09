<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsNotLocked
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user) {
            if ($user->isLocked()) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                return redirect()->route('filament.mpesa.auth.login')
                    ->withErrors(['email' => "Your account has been locked: {$user->lock_reason}"]);
            }

            if (! $user->last_active_at || $user->last_active_at->lt(now()->subMinutes(5))) {
                $user->touchLastActive();
            }
        }

        return $next($request);
    }
}
