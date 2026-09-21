<?php

declare(strict_types=1);

use App\Contracts\Sms\SmsProcessingServiceInterface;

it('executes the sms queue processor command', function (): void {
    $service = Mockery::mock(SmsProcessingServiceInterface::class);

    $service
        ->shouldReceive('processPending')
        ->once();

    $this->app->instance(
        SmsProcessingServiceInterface::class,
        $service,
    );

    $this
        ->artisan('sms:process')
        ->assertSuccessful();
});
