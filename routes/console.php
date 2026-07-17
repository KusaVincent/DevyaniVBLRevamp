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
    ->everyMinute()
    ->runInBackground()
    ->withoutOverlapping();

Schedule::command('logs:archive')
    ->dailyAt('00:10');

Schedule::command('confirmation:health')
    ->hourly()
    ->between('06:00', '22:00');
