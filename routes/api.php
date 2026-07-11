<?php

use App\Http\Middleware\AssignRequestUuid;
use App\Http\Controllers\Api\ConfirmationController;

Route::post('/confirmation', ConfirmationController::class)
    ->middleware(AssignRequestUuid::class);
