<?php

use App\Contracts\Health\ConfirmationHealthServiceInterface;

it('executes the confirmation health check command', function () {
    $service = Mockery::mock(ConfirmationHealthServiceInterface::class);

    $service
        ->shouldReceive('check')
        ->once();

    $this->app->instance(
        ConfirmationHealthServiceInterface::class,
        $service,
    );

    $this
        ->artisan('confirmation:health')
        ->assertSuccessful();
});
