<?php

use App\Contracts\Logging\LogArchiveServiceInterface;

it('executes the log archive processor command', function (): void {
    $service = Mockery::mock(LogArchiveServiceInterface::class);

    $service
        ->shouldReceive('archive')
        ->once();

    $this->app->instance(
        LogArchiveServiceInterface::class,
        $service,
    );

    $this
        ->artisan('logs:archive')
        ->assertSuccessful();
});
