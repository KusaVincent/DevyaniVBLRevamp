<?php

use App\Models\BusinessProfile;
use App\Models\ConfirmationTransaction;
use App\Services\Confirmation\HashGenerator;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

uses(RefreshDatabase::class);

function payload(array $overrides = []): array
{
    return array_merge([
        'Hash' => '',
        'Mobile' => '254712345678',
        'Username' => 'demo',
        'Password' => 'secret',
        'name' => 'John Doe',
        'TransAmount' => '100',
        'created_at' => now()->toDateTimeString(),
        'TransID' => 'ABC123456',
        'TransTime' => now()->format('YmdHis'),
        'TransType' => 'Pay Bill',
        'BillRefNumber' => 'INV001',
        'BusinessShortCode' => '600000',
    ], $overrides);
}

function createBusinessProfile(): BusinessProfile
{
    return BusinessProfile::create([
        'business_short_code' => '600000',
        'username' => 'demo',
        'password' => Hash::make('secret'),
        'secret_key' => 'my-secret-key',
        'credit_account' => '123456789',
    ]);
}

it('accepts a valid confirmation request', function () {

    config([
        'confirmation.authenticate' => true,
        'app.debug' => false,
    ]);

    $profile = createBusinessProfile();

    $payload = payload();

    $payload['Hash'] = app(HashGenerator::class)
        ->generate(
            \App\Data\ConfirmationRequestData::fromArray($payload),
            $profile
        );

    $response = $this->postJson('/api/confirmation', $payload);

    $response
        ->assertOk()
        ->assertJson([
            'ResultCode' => 0,
            'ResultDesc' => 'Data received successfully',
        ]);

    $this->assertDatabaseHas('confirmation_transactions', [
        'transaction_id' => 'ABC123456',
    ]);
});

it('rejects invalid hash', function () {

    config([
        'confirmation.authenticate' => true,
    ]);

    createBusinessProfile();

    $payload = payload([
        'Hash' => 'invalid',
    ]);

    $response = $this->postJson('/api/confirmation', $payload);

    $response
        ->assertOk()
        ->assertJson([
            'ResultCode' => 0,
        ]);

    $this->assertDatabaseHas('confirmation_transactions', [
        'transaction_id' => 'ABC123456',
        'process' => 0,
    ]);
});

it('rejects invalid credentials', function () {

    config([
        'confirmation.authenticate' => true,
    ]);

    $profile = createBusinessProfile();

    $payload = payload([
        'Password' => 'wrong-password',
    ]);

    $payload['Hash'] = app(HashGenerator::class)
        ->generate(
            \App\Data\ConfirmationRequestData::fromArray($payload),
            $profile
        );

    $response = $this->postJson('/api/confirmation', $payload);

    $response
        ->assertOk()
        ->assertJson([
            'ResultCode' => 0,
        ]);

    $this->assertDatabaseHas('confirmation_transactions', [
        'transaction_id' => 'ABC123456',
        'process' => 0,
    ]);
});

it('returns business profile not found', function () {
    config([
        'confirmation.authenticate' => true,
    ]);

    $payload = payload();

    $response = $this->postJson('/api/confirmation', $payload);

    $response
        ->assertOk()
        ->assertJson([
            'ResultCode' => 1002,
        ]);
});

it('returns duplicate transaction response', function () {
    config([
        'confirmation.authenticate' => true,
        'app.debug' => false,
    ]);

    $profile = createBusinessProfile();

    $payload = payload();

    $payload['Hash'] = app(HashGenerator::class)
        ->generate(
            \App\Data\ConfirmationRequestData::fromArray($payload),
            $profile
        );

    $this->postJson('/api/confirmation', $payload)
        ->assertOk();

    $this->postJson('/api/confirmation', $payload)
        ->assertOk();

    expect(
        ConfirmationTransaction::where(
            'transaction_id',
            'ABC123456'
        )->count()
    )->toBe(1);
});

it('returns validation error when required fields are missing', function () {
    $response = $this->postJson('/api/confirmation/', []);

    $response
        ->assertOk()
        ->assertJson([
            'ResultCode' => 1000,
        ]);
});

it('does not store debug test transactions', function () {
    config([
        'confirmation.authenticate' => false,
        'app.debug' => true,
    ]);

    createBusinessProfile();

    $payload = payload([
        'BillRefNumber' => 'test',
    ]);

    $response = $this->postJson('/api/confirmation', $payload);

    $response
        ->assertOk()
        ->assertJson([
            'ResultCode' => 0,
        ]);

    $this->assertDatabaseMissing('confirmation_transactions', [
        'transaction_id' => 'ABC123456',
    ]);
});
