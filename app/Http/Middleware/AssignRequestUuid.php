<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

final class AssignRequestUuid
{
    public function handle(Request $request, Closure $next): Response
    {
        $uuid = (string) Str::uuid();

        $request->attributes->set('request_uuid', $uuid);

        return $next($request);
    }
}
