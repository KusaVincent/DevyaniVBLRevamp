<?php

use App\Contracts\Email\EmailProcessingServiceInterface;

it('executes the confirmation email processor command', function () {
    $service = Mockery::mock(EmailProcessingServiceInterface::class);

    $service
        ->shouldReceive('processPending')
        ->once();

    $this->app->instance(
        EmailProcessingServiceInterface::class,
        $service,
    );

    $this
        ->artisan('email:confirmation')
        ->assertSuccessful();
});
