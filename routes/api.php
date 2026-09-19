<?php

use App\Http\Controllers\Api\ConfirmationController;
use App\Http\Controllers\Api\TillConfirmationController;
use App\Http\Middleware\AssignRequestUuid;
use Illuminate\Http\JsonResponse;

Route::post('/confirmation', ConfirmationController::class)
    ->middleware(AssignRequestUuid::class);

Route::get('/confirmation', static function (): JsonResponse {
    return response()->json([
        'ResultCode' => 1,
        'ResultDesc' => 'Invalid request method',
    ], 405);
});

Route::post('/till/confirmation', TillConfirmationController::class)
    ->middleware(AssignRequestUuid::class);

Route::get('/till/confirmation', static function (): JsonResponse {
    return response()->json([
        'ResultCode' => 1,
        'ResultDesc' => 'Invalid request method',
    ], 405);
});
