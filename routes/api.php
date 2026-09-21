<?php

declare(strict_types=1);

use App\Http\Controllers\Api\ConfirmationController;
use App\Http\Middleware\AssignRequestUuid;
use Illuminate\Http\JsonResponse;

Route::post('/confirmation', ConfirmationController::class)
    ->middleware(AssignRequestUuid::class);

Route::get('/confirmation', static fn (): JsonResponse => response()->json([
    'ResultCode' => 1,
    'ResultDesc' => 'Invalid request method',
], 405));
