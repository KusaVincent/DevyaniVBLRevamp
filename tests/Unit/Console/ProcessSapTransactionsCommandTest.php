<?php

use App\Contracts\Sap\SapProcessingServiceInterface;

it('executes the sap processing command', function () {
    $service = Mockery::mock(SapProcessingServiceInterface::class);

    $service
        ->shouldReceive('processPending')
        ->once();

    $this->app->instance(
        SapProcessingServiceInterface::class,
        $service,
    );

    $this
        ->artisan('sap:process')
        ->assertSuccessful();
});
