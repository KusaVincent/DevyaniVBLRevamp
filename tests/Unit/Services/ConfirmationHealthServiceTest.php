<?php

declare(strict_types=1);

use App\Contracts\Email\EmailServiceInterface;
use App\Contracts\Logging\LogArchiveServiceInterface;
use App\Contracts\Logging\LoggingServiceInterface;
use App\Enum\ProcessSMSTxn;
use App\Models\ConfirmationTransaction;
use App\Services\Health\ConfirmationHealthService;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function (): void {
    $this->email = Mockery::mock(EmailServiceInterface::class);

    $this->logger = Mockery::mock(LoggingServiceInterface::class);

    $this->archive = Mockery::mock(LogArchiveServiceInterface::class);

    config([
        'confirmation.cache.key' => 'confirmation-health',
        'confirmation.health.check.period' => 3,
        'confirmation.email.uptime.recipients' => [
            'ops@example.com',
        ],
    ]);

    $this->service = new ConfirmationHealthService($this->email, $this->logger, $this->archive);
});

function createTransaction(array $attributes = []): ConfirmationTransaction
{
    $transaction = ConfirmationTransaction::create(array_merge([
        'process' => ProcessSMSTxn::YES,
        'transaction_id' => 'UGNMQQAC9AU',
        'amount' => 100,
        'customer_name' => 'Samuel',
        'bill_reference' => '8752018',
        'transaction_time' => now()->format('YmdHis'),
        'business_short_code' => '488489',
    ], collect($attributes)->except('created_at')->all()));

    if (isset($attributes['created_at'])) {
        $transaction->timestamps = false;
        $transaction->created_at = $attributes['created_at'];
        $transaction->save();
    }

    return $transaction;
}

it('returns when there are no confirmation transactions', function (): void {
    $this->logger
        ->shouldReceive('info')
        ->once()
        ->with('Starting confirmation health check');

    $this->logger
        ->shouldReceive('warning')
        ->once()
        ->with('No confirmation transactions found.');

    $this->email
        ->shouldNotReceive('send');

    $this->archive
        ->shouldNotReceive('archiveCurrentLog');

    $this->service->check();

});

it('clears cached alert when a recent confirmation transaction exists', function (): void {
    Cache::put(
        config('confirmation.cache.key'),
        true,
        now()->addHour(),
    );

    $transaction = createTransaction([
        'created_at' => now()->subHour(),
    ]);

    $this->logger
        ->shouldReceive('info')
        ->once()
        ->with('Starting confirmation health check');

    $this->logger
        ->shouldReceive('info')
        ->once()
        ->with(
            'Latest confirmation transaction is within the last 3 hours.',
            Mockery::on(fn ($context): bool => $context['transaction'] === $transaction->transaction_id
                && $context['received_at']->equalTo($transaction->created_at))
        );

    $this->email
        ->shouldNotReceive('send');

    $this->archive
        ->shouldNotReceive('archiveCurrentLog');

    $this->service->check();

    expect(Cache::has(config('confirmation.cache.key')))
        ->toBeFalse();
});

it('does not send another alert when one has already been sent', function (): void {
    Cache::put(
        config('confirmation.cache.key'),
        true,
        now()->addHours(3),
    );

    createTransaction([
        'created_at' => now()->subHours(5),
    ]);

    $this->logger
        ->shouldReceive('info')
        ->once()
        ->with('Starting confirmation health check');

    $this->logger
        ->shouldReceive('info')
        ->once()
        ->with('Confirmation health alert already sent.');

    $this->email
        ->shouldNotReceive('send');

    $this->archive
        ->shouldNotReceive('archiveCurrentLog');

    $this->service->check();

    expect(Cache::has(config('confirmation.cache.key')))
        ->toBeTrue();
});

it('sends an alert when no confirmation has been received within the configured period', function (): void {

    createTransaction([
        'created_at' => now()->subHours(5),
    ]);

    $archive = storage_path('logs/test.zip');

    $this->logger
        ->shouldReceive('info')
        ->times(3);

    $this->logger
        ->shouldReceive('warning')
        ->once()
        ->withArgs(fn ($message, $context): bool => str_contains((string) $message, 'No confirmation transaction received')
            && isset($context['last_transaction']));

    $this->archive
        ->shouldReceive('archiveCurrentLog')
        ->once()
        ->andReturn($archive);

    $this->email
        ->shouldReceive('send')
        ->once();

    File::shouldReceive('delete')
        ->once()
        ->with($archive);

    $this->service->check();

    expect(Cache::has(config('confirmation.cache.key')))
        ->toBeTrue();
});

it('deletes the archive even when email sending fails', function (): void {

    createTransaction([
        'created_at' => now()->subHours(5),
    ]);

    $archive = storage_path('logs/test.zip');

    $this->logger
        ->shouldReceive('info')
        ->twice();

    $this->logger
        ->shouldReceive('warning')
        ->once();

    $this->archive
        ->shouldReceive('archiveCurrentLog')
        ->once()
        ->andReturn($archive);

    $this->email
        ->shouldReceive('send')
        ->once()
        ->andThrow(new RuntimeException('SMTP unavailable'));

    File::shouldReceive('delete')
        ->once()
        ->with($archive);

    expect(fn () => $this->service->check())
        ->toThrow(RuntimeException::class);
});

it('always deletes the temporary archive after sending the email', function (): void {

    createTransaction([
        'created_at' => now()->subHours(5),
    ]);

    $archive = storage_path('logs/test.zip');

    $this->logger
        ->shouldReceive('info')
        ->times(3);

    $this->logger
        ->shouldReceive('warning')
        ->once();

    $this->archive
        ->shouldReceive('archiveCurrentLog')
        ->once()
        ->andReturn($archive);

    $this->email
        ->shouldReceive('send')
        ->once();

    File::shouldReceive('delete')
        ->once()
        ->with($archive);

    $this->service->check();
});
