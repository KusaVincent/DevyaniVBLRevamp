<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('sms:process')
    ->everyMinute()
    ->withoutOverlapping();
Schedule::command('sap:process')
    ->everyMinute();
Schedule::command('email:confirmation')
    ->everyMinute()
    ->withoutOverlapping()
    ->runInBackground();
