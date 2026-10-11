<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsurePasswordIsChanged
{
    private const string FORCE_CHANGE_COMPONENT = 'app.filament.pages.force-password-change';

    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();

        if (! $user) {
            return $next($request);
        }

        $needsChange = $user->must_change_password || $user->isPasswordExpired();

        if (
            $needsChange
            && ! $request->routeIs(
                'filament.mpesa.pages.force-password-change',
                'filament.mpesa.auth.*', // logout, MFA setup, email verification, etc.
            )
            && ! $this->isForcePasswordChangeLivewireRequest($request)
        ) {
            return redirect()->route('filament.mpesa.pages.force-password-change');
        }

        return $next($request);
    }

    private function isForcePasswordChangeLivewireRequest(Request $request): bool
    {
        if (! $request->routeIs('livewire.update')) {
            return false;
        }

        $components = $request->input('components', []);

        if ($components === []) {
            return false;
        }

        foreach ($components as $component) {
            $snapshot = json_decode($component['snapshot'] ?? '', true);

            if (($snapshot['memo']['name'] ?? null) !== self::FORCE_CHANGE_COMPONENT) {
                return false;
            }
        }

        return true;
    }
}
