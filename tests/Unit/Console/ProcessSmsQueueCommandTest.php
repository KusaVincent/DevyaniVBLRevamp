<?php


use App\Contracts\Sms\SmsProcessingServiceInterface;

it('executes the sms queue processor command', function () {
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
