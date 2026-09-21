<?php

declare(strict_types=1);

use App\Contracts\Business\BusinessProfileServiceInterface;
use App\Contracts\Confirmation\AuthenticationServiceInterface;
use App\Contracts\Confirmation\HashValidationServiceInterface;
use App\Contracts\Confirmation\TransactionServiceInterface;
use App\Contracts\Logging\LoggingServiceInterface;
use App\Contracts\Sms\SmsQueueServiceInterface;
use App\Data\ConfirmationRequestData;
use App\Enum\ProcessSMSTxn;
use App\Exceptions\Confirmation\AuthenticationFailedException;
use App\Exceptions\Confirmation\BusinessProfileNotFoundException;
use App\Exceptions\Confirmation\DuplicateTransactionException;
use App\Exceptions\Confirmation\HashValidationException;
use App\Models\BusinessProfile;
use App\Services\Confirmation\ConfirmationService;

beforeEach(function (): void {
    config([
        'confirmation.authenticate' => true,
        'app.debug' => false,
    ]);

    $this->profiles = Mockery::mock(BusinessProfileServiceInterface::class);

    $this->authentication = Mockery::mock(AuthenticationServiceInterface::class);

    $this->hashValidation = Mockery::mock(HashValidationServiceInterface::class);

    $this->transactions = Mockery::mock(TransactionServiceInterface::class);

    $this->sms = Mockery::mock(SmsQueueServiceInterface::class);

    $this->logger = Mockery::mock(LoggingServiceInterface::class);

    $this->service = new ConfirmationService(
        $this->profiles,
        $this->authentication,
        $this->hashValidation,
        $this->transactions,
        $this->sms,
        $this->logger,
    );
});

function requestData(string $billRefNumber = 'INV001', array $overrides = []): ConfirmationRequestData
{
    return ConfirmationRequestData::fromArray(array_merge([
        'Hash' => 'dummy-hash',
        'Mobile' => '254700000001',
        'Username' => 'api-user',
        'Password' => 'secret',
        'name' => 'John Doe',
        'TransAmount' => 100,
        'created_at' => now()->toDateTimeString(),
        'TransID' => 'TXN001',
        'TransTime' => now()->format('YmdHis'),
        'TransType' => 'Pay Bill',
        'BillRefNumber' => $billRefNumber,
        'BusinessShortCode' => '600000',
    ], $overrides));
}

function profile(): BusinessProfile
{
    return new BusinessProfile([
        'business_short_code' => '600000',
        'username' => 'api-user',
        'password' => 'secret',
        'secret_key' => 'abcdef123456',
    ]);
}

it('processes a valid confirmation', function (): void {
    $request = requestData();

    $profile = profile();

    $this->profiles
        ->shouldReceive('find')
        ->once()
        ->with($request)
        ->andReturn($profile);

    $this->authentication
        ->shouldReceive('authenticate')
        ->once()
        ->with($request, $profile);

    $this->hashValidation
        ->shouldReceive('validate')
        ->once()
        ->with($request, $profile);

    $this->logger
        ->shouldReceive('info')
        ->once();

    $this->transactions
        ->shouldReceive('ensureNotDuplicate')
        ->once()
        ->with($request);

    $this->transactions
        ->shouldReceive('store')
        ->once()
        ->with($request, ProcessSMSTxn::YES);

    $this->sms
        ->shouldReceive('queue')
        ->once()
        ->with($request, ProcessSMSTxn::YES);

    $this->service->process($request);
});

it('stores transaction and queues sms with process NO when authentication fails', function (): void {
    config(['confirmation.authenticate' => true]);

    $request = requestData();

    $profile = new BusinessProfile;

    $this->profiles
        ->shouldReceive('find')
        ->once()
        ->with($request)
        ->andReturn($profile);

    $this->authentication
        ->shouldReceive('authenticate')
        ->once()
        ->with($request, $profile)
        ->andThrow(new AuthenticationFailedException('Authentication failed'));

    $this->logger
        ->shouldReceive('notice')
        ->once()
        ->with('Authentication failed');

    $this->transactions
        ->shouldReceive('store')
        ->once()
        ->with($request, ProcessSMSTxn::NO);

    $this->sms
        ->shouldReceive('queue')
        ->once()
        ->with($request, ProcessSMSTxn::NO);

    $this->service->process($request);
});

it('stores transaction with process NO when hash validation fails', function (): void {
    $request = requestData();

    $profile = profile();

    $this->profiles
        ->shouldReceive('find')
        ->andReturn($profile);

    $this->authentication
        ->shouldReceive('authenticate')
        ->once();

    $this->hashValidation
        ->shouldReceive('validate')
        ->once()
        ->andThrow(new HashValidationException);

    $this->logger
        ->shouldReceive('notice')
        ->once()
        ->with('Hash comparison failed. Request cannot be trusted.');

    $this->transactions
        ->shouldReceive('store')
        ->once()
        ->with($request, ProcessSMSTxn::NO);

    $this->sms
        ->shouldReceive('queue')
        ->once()
        ->with($request, ProcessSMSTxn::NO);

    $this->service->process($request);
});

it('returns when transaction is duplicate', function (): void {
    $request = requestData();

    $profile = profile();

    $this->profiles
        ->shouldReceive('find')
        ->andReturn($profile);

    $this->authentication
        ->shouldReceive('authenticate');

    $this->hashValidation
        ->shouldReceive('validate');

    $this->logger
        ->shouldReceive('info');

    $this->transactions
        ->shouldReceive('ensureNotDuplicate')
        ->once()
        ->andThrow(
            new DuplicateTransactionException('Duplicate', 'TXN001')
        );

    $this->logger
        ->shouldReceive('notice')
        ->once();

    $this->transactions
        ->shouldNotReceive('store');

    $this->sms
        ->shouldNotReceive('queue');

    $this->service->process($request);
});

it('returns immediately for debug test transaction', function (): void {
    config(['app.debug' => true]);

    $request = requestData('test');

    $profile = profile();

    $this->profiles
        ->shouldReceive('find')
        ->andReturn($profile);

    $this->authentication
        ->shouldReceive('authenticate');

    $this->hashValidation
        ->shouldReceive('validate');

    $this->logger
        ->shouldReceive('info');

    $this->transactions
        ->shouldReceive('ensureNotDuplicate');

    $this->transactions
        ->shouldNotReceive('store');

    $this->sms
        ->shouldNotReceive('queue');

    $this->service->process($request);
});

it('throws when business profile cannot be found', function (): void {
    $request = requestData();

    $this->profiles
        ->shouldReceive('find')
        ->once()
        ->andThrow(new BusinessProfileNotFoundException($request->businessShortCode));

    $this->expectException(BusinessProfileNotFoundException::class);

    $this->service->process($request);
});

it('skips authentication when disabled', function (): void {
    config(['confirmation.authenticate' => false]);

    $request = requestData();

    $profile = profile();

    $this->profiles
        ->shouldReceive('find')
        ->andReturn($profile);

    $this->authentication
        ->shouldNotReceive('authenticate');

    $this->hashValidation
        ->shouldNotReceive('validate');

    $this->logger
        ->shouldReceive('info');

    $this->transactions
        ->shouldReceive('ensureNotDuplicate');

    $this->transactions
        ->shouldReceive('store')
        ->once();

    $this->sms
        ->shouldReceive('queue')
        ->once();

    $this->service->process($request);
});
