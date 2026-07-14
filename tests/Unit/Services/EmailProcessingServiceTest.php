<?php

declare(strict_types=1);

use App\Contracts\Email\EmailServiceInterface;
use App\Contracts\Logging\LoggingServiceInterface;
use App\Contracts\Sap\SapArchiveServiceInterface;
use App\Enum\Status;
use App\Exceptions\Email\EmailDeliveryException;
use App\Models\EmailQueue;
use App\Services\Email\EmailProcessingService;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->freezeTime();
    config()->set('mail.max_attempts', 3);

    $this->mailer = mock(EmailServiceInterface::class);

    $this->archive = mock(SapArchiveServiceInterface::class);

    $this->logger = mock(LoggingServiceInterface::class);

    $this->service = new EmailProcessingService(
        $this->mailer,
        $this->logger,
        $this->archive,
    );
});

function createEmail(array $attributes = []): EmailQueue
{
    return EmailQueue::create(array_merge([
        'subject' => 'Daily Confirmation',
        'header' => 'Header',
        'message' => 'Email Body',
        'attachment' => storage_path('app/C2B.csv'),
        'recipients' => [
            'john@example.com',
            'mary@example.com',
        ],
        'status' => Status::PENDING,
        'attempts' => 0,
    ], $attributes));
}

it('processes a pending email successfully', function () {
    $email = createEmail();

    $prepared = storage_path('app/temp/20260715_C2B.csv');

    $archived = storage_path('app/archive/20260715_C2B.csv');

    $this->logger
        ->shouldReceive('info')
        ->times(4);

    $this->archive
        ->shouldReceive('prepare')
        ->once()
        ->with($email->attachment)
        ->andReturn($prepared);

    $this->mailer
        ->shouldReceive('send')
        ->once()
        ->with(
            $email->recipients,
            $email->subject,
            $email->header,
            $email->message,
            $prepared,
        );

    $this->archive
        ->shouldReceive('archive')
        ->once()
        ->with(
            $prepared,
            $email->attachment,
        )
        ->andReturn($archived);

    $this->service->processPending();

    $email->refresh();

    expect($email->status)
        ->toBe(Status::PROCESSED)
        ->and($email->attempts)
        ->toBe(1)
        ->and($email->processed_at)
        ->not->toBeNull()
        ->and($email->next_retry_at)
        ->toBeNull()
        ->and($email->error)
        ->toBeNull();

    $response = json_decode($email->response, true);

    expect($response)
        ->toHaveKey('success', true)
        ->toHaveKey('attempt', 1)
        ->toHaveKey('processed_at');
});

it('marks email as failed and schedules retry when delivery fails', function () {
    config()->set('mail.max_attempts', 3);

    $email = createEmail();

    $prepared = storage_path('app/temp/20260715_C2B.csv');

    $exception = new EmailDeliveryException(
        recipient: 'john@example.com',
        response: [
            'status' => 500,
            'message' => 'SMTP Error',
        ],
    );

    $this->logger
        ->shouldReceive('info')
        ->times(2);

    $this->logger
        ->shouldReceive('error')
        ->once();

    $this->archive
        ->shouldReceive('prepare')
        ->once()
        ->with($email->attachment)
        ->andReturn($prepared);

    $this->archive
        ->shouldNotReceive('archive');

    $this->mailer
        ->shouldReceive('send')
        ->once()
        ->andThrow($exception);

    $this->service->processPending();

    $email->refresh();

    expect($email->status)
        ->toBe(Status::FAILED)
        ->and($email->attempts)
        ->toBe(1)
        ->and($email->processed_at)
        ->toBeNull()
        ->and($email->error)
        ->toBe('Failed to deliver email.')
        ->and($email->next_retry_at)
        ->not->toBeNull();

    expect($email->next_retry_at)
        ->toBeBetween(
            now()->addMinute()->subSecond(),
            now()->addMinute()->addSecond(),
        );

    expect(json_decode($email->response, true))
        ->toMatchArray([
            'status' => 500,
            'message' => 'SMTP Error',
        ]);
});

it('marks email as abandoned after reaching maximum attempts', function () {
    config()->set('mail.max_attempts', 3);

    $email = createEmail([
        'status' => Status::FAILED,
        'attempts' => 2,
    ]);

    $prepared = storage_path('app/temp/20260715_C2B.csv');

    $exception = new EmailDeliveryException(
        recipient: 'john@example.com',
        response: [
            'status' => 500,
            'message' => 'SMTP Error',
        ],
    );

    $this->logger
        ->shouldReceive('info')
        ->times(2);

    $this->logger
        ->shouldReceive('error')
        ->once();

    $this->archive
        ->shouldReceive('prepare')
        ->once()
        ->with($email->attachment)
        ->andReturn($prepared);

    $this->archive
        ->shouldNotReceive('archive');

    $this->mailer
        ->shouldReceive('send')
        ->once()
        ->andThrow($exception);

    $this->service->processPending();

    $email->refresh();

    expect($email->status)
        ->toBe(Status::ABANDONED)
        ->and($email->attempts)
        ->toBe(3)
        ->and($email->processed_at)
        ->toBeNull()
        ->and($email->next_retry_at)
        ->toBeNull()
        ->and($email->error)
        ->toBe('Failed to deliver email.');

    expect(json_decode($email->response, true))
        ->toMatchArray([
            'status' => 500,
            'message' => 'SMTP Error',
        ]);
});

it('ignores emails scheduled for a future retry', function () {
    $email = createEmail([
        'status' => Status::FAILED,
        'attempts' => 1,
        'next_retry_at' => now()->addMinutes(5),
    ]);

    $this->logger
        ->shouldReceive('info')
        ->never();

    $this->mailer
        ->shouldReceive('send')
        ->never();

    $this->archive
        ->shouldReceive('prepare')
        ->never();

    $this->archive
        ->shouldReceive('archive')
        ->never();

    $this->service->processPending();

    $email->refresh();

    expect($email->status)
        ->toBe(Status::FAILED)
        ->and($email->attempts)
        ->toBe(1)
        ->and($email->processed_at)
        ->toBeNull()
        ->and($email->next_retry_at)
        ->not->toBeNull();
});

it('ignores emails that have already been processed', function () {
    $email = createEmail([
        'status' => Status::PROCESSED,
        'processed_at' => now()->subMinute(),
    ]);

    $this->logger
        ->shouldReceive('info')
        ->never();

    $this->mailer
        ->shouldReceive('send')
        ->never();

    $this->archive
        ->shouldReceive('prepare')
        ->never();

    $this->archive
        ->shouldReceive('archive')
        ->never();

    $this->service->processPending();

    $email->refresh();

    expect($email->status)
        ->toBe(Status::PROCESSED)
        ->and($email->attempts)
        ->toBe(0)
        ->and($email->processed_at)
        ->not->toBeNull();
});

it('ignores emails that have reached maximum attempts', function () {
    config()->set('mail.max_attempts', 3);

    $email = createEmail([
        'status' => Status::FAILED,
        'attempts' => 3,
        'next_retry_at' => now()->subMinute(),
    ]);

    $this->logger
        ->shouldReceive('info')
        ->never();

    $this->mailer
        ->shouldReceive('send')
        ->never();

    $this->archive
        ->shouldReceive('prepare')
        ->never();

    $this->archive
        ->shouldReceive('archive')
        ->never();

    $this->service->processPending();

    $email->refresh();

    expect($email->status)
        ->toBe(Status::FAILED)
        ->and($email->attempts)
        ->toBe(3)
        ->and($email->processed_at)
        ->toBeNull()
        ->and($email->next_retry_at)
        ->not->toBeNull();
});

it('processes multiple pending emails', function () {
    $first = createEmail([
        'attachment' => '/tmp/C2B.csv',
    ]);

    $second = createEmail([
        'attachment' => '/tmp/VBL_C2B.csv',
        'subject' => 'Second Email',
    ]);

    $this->archive
        ->shouldReceive('prepare')
        ->twice()
        ->andReturn('/tmp/prepared.csv');

    $this->mailer
        ->shouldReceive('send')
        ->twice();

    $this->archive
        ->shouldReceive('archive')
        ->twice()
        ->andReturn('/archive/file.csv');

    $this->logger
        ->shouldReceive('info')
        ->atLeast()
        ->times(5);

    $this->service->processPending();

    $first->refresh();
    $second->refresh();

    expect($first->status)
        ->toBe(Status::PROCESSED)
        ->and($second->status)
        ->toBe(Status::PROCESSED);

    expect($first->processed_at)
        ->not->toBeNull()
        ->and($second->processed_at)
        ->not->toBeNull();

    expect($first->attempts)
        ->toBe(1)
        ->and($second->attempts)
        ->toBe(1);
});

it('continues processing remaining emails when one email fails', function () {
    $first = createEmail([
        'subject' => 'First',
        'attachment' => '/tmp/C2B.csv',
    ]);

    $second = createEmail([
        'subject' => 'Second',
        'attachment' => '/tmp/VBL_C2B.csv',
    ]);

    $this->archive
        ->shouldReceive('prepare')
        ->twice()
        ->andReturn('/tmp/prepared.csv');

    $this->mailer
        ->shouldReceive('send')
        ->once()
        ->andThrow(
            new EmailDeliveryException(
                recipient: 'john@example.com',
                response: [
                    'status' => 500,
                    'message' => 'SMTP Error',
                ],
            )
        );

    $this->mailer
        ->shouldReceive('send')
        ->once();

    $this->archive
        ->shouldReceive('archive')
        ->once()
        ->andReturn('/archive/file.csv');

    $this->logger
        ->shouldReceive('info')
        ->atLeast()
        ->times(4);

    $this->logger
        ->shouldReceive('error')
        ->once();

    $this->service->processPending();

    $first->refresh();
    $second->refresh();

    expect([
        $first->status,
        $second->status,
    ])->toContain(Status::FAILED)
        ->toContain(Status::PROCESSED);
});

it('does nothing when there are no pending emails', function () {
    $this->logger
        ->shouldReceive('info')
        ->never();

    $this->mailer
        ->shouldReceive('send')
        ->never();

    $this->archive
        ->shouldReceive('prepare')
        ->never();

    $this->archive
        ->shouldReceive('archive')
        ->never();

    $this->service->processPending();

    expect(EmailQueue::count())->toBe(0);
});

it('marks email as failed when SAP attachment cannot be prepared', function () {
    $email = createEmail();

    $this->archive
        ->shouldReceive('prepare')
        ->once()
        ->with($email->attachment)
        ->andReturn(null);

    $this->mailer
        ->shouldNotReceive('send');

    $this->archive
        ->shouldNotReceive('archive');

    $this->logger
        ->shouldReceive('info')
        ->times(2);

    $this->logger
        ->shouldReceive('error')
        ->once()
        ->with(
            'SAP attachment not found.',
            [
                'attachment' => $email->attachment,
            ],
        );

    $this->service->processPending();

    $email->refresh();

    expect($email->status)
        ->toBe(Status::ABANDONED)
        ->and($email->processed_at)
        ->not->toBeNull()
        ->and($email->error)
        ->toBe('SAP attachment not found.')
        ->and($email->next_retry_at)->toBeNull();
});

it('stores the success response after processing', function () {
    $email = createEmail();

    $this->archive
        ->shouldReceive('prepare')
        ->once()
        ->andReturn('/tmp/C2B.csv');

    $this->mailer
        ->shouldReceive('send')
        ->once();

    $this->archive
        ->shouldReceive('archive')
        ->once()
        ->andReturn('/archive/20260715_C2B.csv');

    $this->logger
        ->shouldReceive('info')
        ->atLeast()
        ->times(4);

    $this->service->processPending();

    $email->refresh();

    expect($email->response)
        ->not->toBeNull();

    $response = json_decode($email->response, true);

    expect($response)
        ->toHaveKeys([
            'success',
            'attempt',
            'processed_at',
        ])
        ->and($response['success'])->toBeTrue()
        ->and($response['attempt'])->toBe(1)
        ->and($response['processed_at'])->not->toBeEmpty();
});

it('increments the attempt counter when processing an email', function () {
    $email = createEmail([
        'attempts' => 1,
        'status' => Status::FAILED,
    ]);

    $this->archive
        ->shouldReceive('prepare')
        ->once()
        ->andReturn('/tmp/C2B.csv');

    $this->mailer
        ->shouldReceive('send')
        ->once();

    $this->archive
        ->shouldReceive('archive')
        ->once()
        ->andReturn('/archive/C2B.csv');

    $this->logger
        ->shouldReceive('info')
        ->atLeast()
        ->times(4);

    $this->service->processPending();

    $email->refresh();

    expect($email->attempts)
        ->toBe(2)
        ->and($email->status)
        ->toBe(Status::PROCESSED);
});

it('logs the archived SAP file path', function () {
    $email = createEmail();

    $this->archive
        ->shouldReceive('prepare')
        ->once()
        ->andReturn('/tmp/20260715_C2B.csv');

    $this->mailer
        ->shouldReceive('send')
        ->once();

    $this->archive
        ->shouldReceive('archive')
        ->once()
        ->with(
            '/tmp/20260715_C2B.csv',
            $email->attachment,
        )
        ->andReturn('/archive/20260715_C2B.csv');

    $this->logger
        ->shouldReceive('info')
        ->with('Fetched queued emails')
        ->once();

    $this->logger
        ->shouldReceive('info')
        ->with('Email Details', \Mockery::type('array'))
        ->once();

    $this->logger
        ->shouldReceive('info')
        ->with('Processed queued emails')
        ->once();

    $this->logger
        ->shouldReceive('info')
        ->with(
            'SAP file archived.',
            [
                'from' => $email->attachment,
                'to' => '/archive/20260715_C2B.csv',
            ]
        )
        ->once();

    $this->service->processPending();
});
