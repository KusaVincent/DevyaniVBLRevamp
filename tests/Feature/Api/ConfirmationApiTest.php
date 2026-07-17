<?php

use App\Data\ConfirmationRequestData;
use App\Models\BusinessProfile;
use App\Models\ConfirmationTransaction;
use App\Services\Confirmation\HashGenerator;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Hash;

uses(RefreshDatabase::class);

beforeEach(function () {
    Queue::fake();

    config([
        'confirmation.authenticate' => true,
        'app.debug' => false,
    ]);
});

function validPayload(): array
{
    $profile = BusinessProfile::create([
        'business_short_code'     => '488489',
        'username'                => 'apiuser',
        'password'                => Hash::make('secret'),
        'secret_key'              => 'my-secret-key',
        'credit_account'          => '1234567890',
        'sap_file'                => 'SAP001',
        'business_transaction'    => 'TXN01',
        'business_area'           => 'AREA01',
        'profit_center'           => 'PC001',
        'active'                  => 1,
        'sap_headers'             => [],
    ]);

    $payload = [
        'Mobile' => '254712345678',
        'Username' => 'api-user',
        'Password' => 'secret',
        'name' => 'Samuel',
        'created_at' => now()->toDateTimeString(),
        'TransAmount' => '100',
        'TransID' => 'UGNMQQAC9AU',
        'TransTime' => now()->format('YmdHis'),
        'TransType' => 'Pay Bill',
        'BillRefNumber' => '8752018',
        'BusinessShortCode' => '488489',
    ];

    $request = ConfirmationRequestData::fromArray([
        ...$payload,
        'Hash' => '',
    ]);

    $payload['Hash'] = app(HashGenerator::class)
        ->generate($request, $profile);

    return $payload;
}

it('accepts a valid confirmation request', function () {
    $response = $this->postJson(
        '/api/confirmation/',
        validPayload(),
    );

    $response
        ->assertOk()
        ->assertJson([
            'ResultCode' => 0,
            'ResultDesc' => 'Data received successfully',
        ]);

    expect(
        ConfirmationTransaction::count()
    )->toBe(1);
});

it('rejects an invalid payload', function () {
    $payload = validPayload();

    unset($payload['Hash']);

    $this
        ->postJson('/api/confirmation/', $payload)
        ->assertStatus(400)
        ->assertJson([
            'ResultCode' => 1,
        ]);
});

it('returns business profile error', function () {
    $payload = validPayload();

    $payload['BusinessShortCode'] = '999999';

    $this
        ->postJson('/api/confirmation/', $payload)
        ->assertStatus(400)
        ->assertJson([
            'ResultCode' => 1,
        ]);
});

it('stores transaction but marks it not for processing when authentication fails', function () {
    $payload = validPayload();

    $payload['Password'] = 'wrong-password';

    $this
        ->postJson('/api/confirmation/', $payload)
        ->assertOk();

    expect(
        ConfirmationTransaction::first()->process->value
    )->toBe(0);
});

it('stores transaction with process NO when hash is invalid', function () {
    $payload = validPayload();

    $payload['Hash'] = 'invalid-hash';

    $this
        ->postJson('/api/confirmation/', $payload)
        ->assertOk();

    expect(
        ConfirmationTransaction::first()->process->value
    )->toBe(0);
});

it('does not create duplicate transactions', function () {
    $payload = validPayload();

    $this->postJson('/api/confirmation/', $payload);

    $this->postJson('/api/confirmation/', $payload);

    expect(
        ConfirmationTransaction::count()
    )->toBe(1);
});

it('assigns a request uuid', function () {
    Log::spy();

    $this->postJson('/api/confirmation/', validPayload());

    Log::shouldHaveReceived('channel');
});
