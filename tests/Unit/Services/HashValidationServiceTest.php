<?php

declare(strict_types=1);

use App\Data\ConfirmationRequestData;
use App\Exceptions\Confirmation\HashValidationException;
use App\Models\BusinessProfile;
use App\Services\Confirmation\HashGenerator;
use App\Services\Confirmation\HashValidationService;
use App\Services\Logging\LoggingService;

beforeEach(function (): void {
    $this->generator = new HashGenerator;

    $this->logger = app(LoggingService::class);

    $this->service = new HashValidationService(
        $this->generator,
        $this->logger,
    );

    $this->profile = new BusinessProfile([
        'secret_key' => 'secret123',
        'credit_account' => '488489',
    ]);
});

function makeRequest(string $hash = ''): ConfirmationRequestData
{
    return new ConfirmationRequestData(
        hash: $hash,
        mobile: '254712345678',
        amount: '1100.0',
        username: 'username',
        password: 'password',
        createdAt: '2026-06-20 12:07:06.0',
        customerName: 'SAMUEL',
        billReference: '8752018',
        transactionId: 'UGNMQQAC9AU',
        transactionTime: '20260620120439',
        transactionType: 'PAYBILL',
        businessShortCode: '488489',
    );
}

it('accepts a valid hash', function (): void {
    $request = makeRequest();

    $request = new ConfirmationRequestData(
        hash: $this->generator->generate($request, $this->profile),
        mobile: $request->mobile,
        amount: $request->amount,
        username: $request->username,
        password: $request->password,
        createdAt: $request->createdAt,
        customerName: $request->customerName,
        billReference: $request->billReference,
        transactionId: $request->transactionId,
        transactionTime: $request->transactionTime,
        transactionType: $request->transactionType,
        businessShortCode: $request->businessShortCode,
    );

    $this->service->validate($request, $this->profile);

    expect(true)->toBeTrue();
});

it('throws when the hash is invalid', function (): void {
    $this->service->validate(
        makeRequest('invalid-hash'),
        $this->profile,
    );

})->throws(HashValidationException::class);
