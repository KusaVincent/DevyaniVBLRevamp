<?php

use App\Http\Controllers\Api\ConfirmationController;
use App\Http\Middleware\AssignRequestUuid;

Route::post('/confirmation', ConfirmationController::class)
    ->middleware(AssignRequestUuid::class);
