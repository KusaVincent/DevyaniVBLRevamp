<?php

declare(strict_types=1);

use App\Data\ConfirmationRequestData;
use App\Exceptions\Confirmation\AuthenticationFailedException;
use App\Models\BusinessProfile;
use App\Services\Confirmation\AuthenticationService;
use Illuminate\Support\Facades\Hash;

beforeEach(function (): void {

    $this->service = new AuthenticationService;

    $this->profile = new BusinessProfile([
        'username' => 'api-user',
        'password' => Hash::make('secret'),
    ]);

});

function makeConfirmationRequest(string $username = 'api-user', string $password = 'secret'): ConfirmationRequestData
{
    return new ConfirmationRequestData(
        hash: '',
        mobile: '254712345678',
        amount: '1100.0',
        username: $username,
        password: $password,
        createdAt: '2026-06-20 12:07:06.0',
        customerName: 'SAMUEL',
        billReference: '8752018',
        transactionId: 'UGNMQQAC9AU',
        transactionTime: '20260620120439',
        transactionType: 'PAYBILL',
        businessShortCode: '488489',
    );
}

it('authenticates valid credentials', function (): void {
    $this->service->authenticate(
        makeConfirmationRequest(),
        $this->profile,
    );

    expect(true)->toBeTrue();
});

it('throws when username is invalid', function (): void {
    $this->service->authenticate(
        makeConfirmationRequest(username: 'invalid-user'),
        $this->profile,
    );
})->throws(AuthenticationFailedException::class);

it('throws when password is invalid', function (): void {
    $this->service->authenticate(
        makeConfirmationRequest(password: 'wrong-password'),
        $this->profile,
    );
})->throws(AuthenticationFailedException::class);

it('throws when username and password are invalid', function (): void {
    $this->service->authenticate(
        makeConfirmationRequest(username: 'invalid-user', password: 'wrong-password'),
        $this->profile,
    );
})->throws(AuthenticationFailedException::class);
