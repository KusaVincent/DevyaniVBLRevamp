<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsurePasswordIsChanged
{
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();

        if ($user) {
            $needsChange = $user->must_change_password || $user->isPasswordExpired(30);

            if (
                $needsChange &&
                ! $request->routeIs('filament.mpesa.pages.force-password-change') &&
                ! $request->routeIs('filament.mpesa.auth.logout')
            ) {
                return redirect()->route('filament.mpesa.pages.force-password-change');
            }
        }

        return $next($request);
    }
}
