<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Schedule;

Schedule::command('sms:process')
    ->everyMinute()
    ->runInBackground()
    ->withoutOverlapping();

Schedule::command('sap:process')
    ->everyMinute()
    ->runInBackground()
    ->withoutOverlapping();

Schedule::command('email:confirmation')
    ->runInBackground()
    ->everyFiveMinutes()
    ->withoutOverlapping();

Schedule::command('logs:archive')
    ->dailyAt('00:10');

Schedule::command('confirmation:health')
    ->hourly()
    ->between('06:00', '22:00');

Schedule::command('auth:send-password-expiration-reminders')
    ->dailyAt('09:00')
    ->withoutOverlapping()
    ->onOneServer();

Schedule::command('auth:lock-inactive-users')
    ->dailyAt('01:00')
    ->withoutOverlapping()
    ->onOneServer();
