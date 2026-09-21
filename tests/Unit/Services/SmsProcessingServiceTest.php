<?php

declare(strict_types=1);

use App\Contracts\Logging\LoggingServiceInterface;
use App\Contracts\Sms\CelcomSmsServiceInterface;
use App\Contracts\Sms\SmsMessageBuilderInterface;
use App\Enum\ProcessSMSTxn;
use App\Enum\Status;
use App\Exceptions\Sms\SmsDeliveryException;
use App\Exceptions\Sms\SmsRejectedException;
use App\Models\SmsQueue;
use App\Services\Sms\SmsProcessingService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery;

uses(RefreshDatabase::class);

beforeEach(function (): void {
    config(['services.celcom.max_attempts' => 3]);

    $this->sms = Mockery::mock(CelcomSmsServiceInterface::class);

    $this->builder = Mockery::mock(SmsMessageBuilderInterface::class);

    $this->logger = Mockery::mock(LoggingServiceInterface::class);

    $this->service = new SmsProcessingService($this->sms, $this->builder, $this->logger);
});

function createSmsQueue(array $attributes = []): SmsQueue
{
    return SmsQueue::create(array_merge([
        'process' => ProcessSMSTxn::YES,
        'status' => Status::PENDING,
        'attempts' => 0,
        'recipient_name' => 'John Doe',
        'recipient_mobile' => '254712345678',
        'customer_name' => 'Samuel',
        'amount' => 1000,
        'mpesa_ref' => 'UGNMQQAC9AU',
        'bill_reference' => '8752018',
        'response' => null,
        'error' => null,
        'next_retry_at' => null,
        'created_at' => now(),
    ], $attributes));
}

it('processes a pending sms successfully', function (): void {
    $sms = createSmsQueue();

    $this->builder
        ->shouldReceive('build')
        ->once()
        ->with(
            Mockery::on(fn (SmsQueue $message): bool => $message->id === $sms->id))
        ->andReturn('SMS message');

    $this->sms
        ->shouldReceive('send')
        ->once()
        ->with($sms->recipient_mobile, 'SMS message')
        ->andReturn(['success' => true]);

    $this->logger
        ->shouldReceive('info')
        ->atLeast()
        ->times(3);

    $this->service->processPending();

    $sms->refresh();

    expect($sms->status)
        ->toBe(Status::PROCESSED)
        ->and($sms->attempts)
        ->toBe(1)
        ->and($sms->processed_at)
        ->not->toBeNull()
        ->and($sms->error)
        ->toBeNull()
        ->and($sms->next_retry_at)
        ->toBeNull()
        ->and($sms->response)
        ->toBe(['success' => true]);
});

it('marks sms as failed and schedules retry when delivery fails', function (): void {
    config(['services.celcom.max_attempts' => 3]);

    $sms = createSmsQueue();

    $this->builder
        ->shouldReceive('build')
        ->once()
        ->with(Mockery::on(fn (SmsQueue $message): bool => $message->id === $sms->id))
        ->andReturn('SMS message');

    $this->sms
        ->shouldReceive('send')
        ->once()
        ->with(
            $sms->recipient_mobile,
            'SMS message',
        )
        ->andThrow(
            new SmsDeliveryException(
                mobile: $sms->recipient_mobile,
                response: ['message' => 'Gateway unavailable'],
                message: 'Gateway unavailable',
            )
        );

    $this->logger
        ->shouldReceive('info')
        ->atLeast()
        ->times(2);

    $this->logger
        ->shouldReceive('error')
        ->once()
        ->with('Gateway unavailable');

    $this->service->processPending();

    $sms->refresh();

    expect($sms->status)
        ->toBe(Status::FAILED)
        ->and($sms->attempts)
        ->toBe(1)
        ->and($sms->processed_at)
        ->toBeNull()
        ->and($sms->error)
        ->toBe('Gateway unavailable')
        ->and($sms->response)
        ->toBe(['message' => 'Gateway unavailable'])
        ->and($sms->next_retry_at)
        ->not->toBeNull()
        ->and(strtotime($sms->next_retry_at))
        ->toBeGreaterThanOrEqual(now()->addMinute()->subSecond()->timestamp)
        ->toBeLessThanOrEqual(now()->addMinute()->addSecond()->timestamp);

});

it('marks sms as abandoned after reaching maximum attempts', function (): void {
    config(['services.celcom.max_attempts' => 3]);

    $sms = createSmsQueue([
        'attempts' => 2,
        'status' => Status::FAILED,
    ]);

    $this->builder
        ->shouldReceive('build')
        ->once()
        ->with(Mockery::on(
            fn (SmsQueue $message): bool => $message->id === $sms->id
        ))
        ->andReturn('SMS message');

    $this->sms
        ->shouldReceive('send')
        ->once()
        ->with($sms->recipient_mobile, 'SMS message')
        ->andThrow(
            new SmsDeliveryException(
                mobile: $sms->recipient_mobile,
                response: ['message' => 'Gateway unavailable'],
                message: 'Gateway unavailable',
            )
        );

    $this->logger
        ->shouldReceive('info')
        ->atLeast()
        ->times(2);

    $this->logger
        ->shouldReceive('error')
        ->once()
        ->with('Gateway unavailable');

    $this->service->processPending();

    $sms->refresh();

    expect($sms->status)
        ->toBe(Status::ABANDONED)
        ->and($sms->attempts)
        ->toBe(3)
        ->and($sms->processed_at)
        ->toBeNull()
        ->and($sms->error)
        ->toBe('Gateway unavailable')
        ->and($sms->response)
        ->toBe(['message' => 'Gateway unavailable'])
        ->and($sms->next_retry_at)
        ->toBeNull();
});

it('marks sms as abandoned when gateway rejects the sms', function (): void {
    $sms = createSmsQueue();

    $this->builder
        ->shouldReceive('build')
        ->once()
        ->with(Mockery::on(
            fn (SmsQueue $message): bool => $message->id === $sms->id
        ))
        ->andReturn('SMS message');

    $this->sms
        ->shouldReceive('send')
        ->once()
        ->with(
            $sms->recipient_mobile,
            'SMS message',
        )
        ->andThrow(
            new SmsRejectedException(
                mobile: $sms->recipient_mobile,
                message: 'Invalid recipient',
                response: [
                    'code' => '400',
                    'message' => 'Invalid recipient',
                ],
            )
        );

    $this->logger
        ->shouldReceive('info')
        ->atLeast()
        ->times(2);

    $this->logger
        ->shouldReceive('error')
        ->once()
        ->with('Invalid recipient');

    $this->service->processPending();

    $sms->refresh();

    expect($sms->status)
        ->toBe(Status::ABANDONED)
        ->and($sms->attempts)
        ->toBe(1)
        ->and($sms->processed_at)
        ->toBeNull()
        ->and($sms->error)
        ->toBe('Invalid recipient')
        ->and($sms->response)
        ->toBe([
            'code' => '400',
            'message' => 'Invalid recipient',
        ])
        ->and($sms->next_retry_at)
        ->toBeNull();
});

it('ignores sms scheduled for a future retry', function (): void {
    $sms = createSmsQueue([
        'status' => Status::FAILED,
        'attempts' => 1,
        'next_retry_at' => now()->addMinutes(10),
    ]);

    $this->builder
        ->shouldNotReceive('build');

    $this->sms
        ->shouldNotReceive('send');

    $this->logger
        ->shouldReceive('info')
        ->once()
        ->with('Starting SMS processing');

    $this->service->processPending();

    $sms->refresh();

    expect($sms->status)
        ->toBe(Status::FAILED)
        ->and($sms->attempts)
        ->toBe(1)
        ->and($sms->processed_at)
        ->toBeNull()
        ->and($sms->next_retry_at)
        ->not->toBeNull();
});

it('ignores sms that has already been processed', function (): void {
    $sms = createSmsQueue([
        'status' => Status::PROCESSED,
        'processed_at' => now(),
    ]);

    $this->builder
        ->shouldNotReceive('build');

    $this->sms
        ->shouldNotReceive('send');

    $this->logger
        ->shouldReceive('info')
        ->once()
        ->with('Starting SMS processing');

    $this->service->processPending();

    $sms->refresh();

    expect($sms->status)
        ->toBe(Status::PROCESSED)
        ->and($sms->attempts)
        ->toBe(0)
        ->and($sms->processed_at)
        ->not->toBeNull();
});

it('ignores sms that has reached maximum attempts', function (): void {
    config(['services.celcom.max_attempts' => 3]);

    $sms = createSmsQueue([
        'status' => Status::FAILED,
        'attempts' => 3,
    ]);

    $this->builder->shouldNotReceive('build');

    $this->sms->shouldNotReceive('send');

    $this->logger
        ->shouldReceive('info')
        ->once()
        ->with('Starting SMS processing');

    $this->service->processPending();

    $sms->refresh();

    expect($sms->status)
        ->toBe(Status::FAILED)
        ->and($sms->attempts)
        ->toBe(3)
        ->and($sms->processed_at)
        ->toBeNull()
        ->and($sms->next_retry_at)
        ->toBeNull();
});

it('ignores sms marked as do not process', function (): void {
    $sms = createSmsQueue([
        'process' => ProcessSMSTxn::NO,
        'status' => Status::PENDING,
    ]);

    $this->builder
        ->shouldNotReceive('build');

    $this->sms
        ->shouldNotReceive('send');

    $this->logger
        ->shouldReceive('info')
        ->once()
        ->with('Starting SMS processing');

    $this->service->processPending();

    $sms->refresh();

    expect($sms->process)
        ->toBe(ProcessSMSTxn::NO)
        ->and($sms->status)
        ->toBe(Status::PENDING)
        ->and($sms->attempts)
        ->toBe(0)
        ->and($sms->processed_at)
        ->toBeNull()
        ->and($sms->error)
        ->toBeNull()
        ->and($sms->response)
        ->toBeNull();
});

it('processes multiple pending sms messages', function (): void {
    $sms1 = createSmsQueue([
        'recipient_name' => 'John Doe',
        'recipient_mobile' => '254700000001',
        'mpesa_ref' => 'TXN001',
    ]);

    $sms2 = createSmsQueue([
        'recipient_name' => 'Jane Doe',
        'recipient_mobile' => '254700000002',
        'mpesa_ref' => 'TXN002',
    ]);

    $this->builder
        ->shouldReceive('build')
        ->twice()
        ->andReturn('SMS message');

    $this->sms
        ->shouldReceive('send')
        ->twice()
        ->andReturn([
            'success' => true,
        ]);

    $this->logger
        ->shouldReceive('info')
        ->atLeast()
        ->times(4);

    $this->service->processPending();

    $sms1->refresh();
    $sms2->refresh();

    expect($sms1->status)
        ->toBe(Status::PROCESSED)
        ->and($sms1->attempts)
        ->toBe(1)
        ->and($sms1->processed_at)
        ->not->toBeNull()
        ->and($sms1->error)
        ->toBeNull()
        ->and($sms1->response)
        ->toBe([
            'success' => true,
        ])
        ->and($sms2->status)
        ->toBe(Status::PROCESSED)
        ->and($sms2->attempts)
        ->toBe(1)
        ->and($sms2->processed_at)
        ->not->toBeNull()
        ->and($sms2->error)
        ->toBeNull()
        ->and($sms2->response)
        ->toBe([
            'success' => true,
        ]);

});

it('continues processing remaining sms when one sms fails', function (): void {
    $sms1 = createSmsQueue([
        'recipient_mobile' => '254700000001',
        'mpesa_ref' => 'TXN001',
    ]);

    $sms2 = createSmsQueue([
        'recipient_mobile' => '254700000002',
        'mpesa_ref' => 'TXN002',
    ]);

    $this->builder
        ->shouldReceive('build')
        ->twice()
        ->andReturn('SMS message');

    $this->sms
        ->shouldReceive('send')
        ->once()
        ->with('254700000001', 'SMS message')
        ->andThrow(
            new SmsDeliveryException(
                mobile: '254700000001',
                response: ['message' => 'Gateway unavailable'],
                message: 'Gateway unavailable',
            )
        );

    $this->sms
        ->shouldReceive('send')
        ->once()
        ->with('254700000002', 'SMS message')
        ->andReturn(['success' => true]);

    $this->logger
        ->shouldReceive('info')
        ->once()
        ->with('Starting SMS processing');

    $this->logger
        ->shouldReceive('info')
        ->once()
        ->with('Fetched from SMS queue');

    $this->logger
        ->shouldReceive('info')
        ->once()
        ->with('Processed SMS');

    $this->logger
        ->shouldReceive('error')
        ->once()
        ->with('Gateway unavailable');

    $this->service->processPending();

    $sms1->refresh();
    $sms2->refresh();

    expect($sms1->status)
        ->toBe(Status::FAILED)
        ->and($sms1->attempts)
        ->toBe(1)
        ->and($sms1->processed_at)
        ->toBeNull()
        ->and($sms1->error)
        ->toBe('Gateway unavailable')
        ->and($sms2->status)
        ->toBe(Status::PROCESSED)
        ->and($sms2->attempts)
        ->toBe(1)
        ->and($sms2->processed_at)
        ->not->toBeNull()
        ->and($sms2->error)
        ->toBeNull()
        ->and($sms2->response)
        ->toBe(['success' => true]);
});

it('does nothing when there are no pending sms', function (): void {
    $this->builder
        ->shouldNotReceive('build');

    $this->sms
        ->shouldNotReceive('send');

    $this->logger
        ->shouldReceive('info')
        ->once()
        ->with('Starting SMS processing');

    $this->service->processPending();

    expect(SmsQueue::count())
        ->toBe(0);
});
