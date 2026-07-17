<?php

declare(strict_types=1);

use App\Models\SmsQueue;
use App\Services\Sms\SmsMessageBuilder;
use Carbon\Carbon;

beforeEach(function (): void {
    $this->builder = new SmsMessageBuilder;
});

it('builds the expected sms message', function (): void {
    $sms = new SmsQueue([
        'recipient_name' => 'Vincent Kusa',
        'bill_reference' => '8752018',
        'amount' => 1100,
        'customer_name' => 'Samuel',
        'mpesa_ref' => 'UGNMQQAC9AU',
    ]);

    $sms->created_at = Carbon::parse(
        '2026-06-20 12:07:06'
    );

    $message = $this->builder->build($sms);

    expect($message)->toBe(
        'Dear Vincent Kusa, Payment for 8752018 of KES 1,100.00 received from Samuel at 20-06-2026 12:07 PM. Mpesa reference: UGNMQQAC9AU.'
    );
});

it('formats decimal amounts correctly', function (): void {
    $sms = new SmsQueue([
        'recipient_name' => 'Vincent',
        'bill_reference' => '8752018',
        'amount' => 1234.5,
        'customer_name' => 'Samuel',
        'mpesa_ref' => 'REF123',
    ]);

    $sms->created_at = Carbon::parse(
        '2026-06-20 12:07:06'
    );

    $message = $this->builder->build($sms);

    expect($message)
        ->toContain('KES 1,234.50');
});

it('formats zero amounts correctly', function (): void {
    $sms = new SmsQueue([
        'recipient_name' => 'Vincent',
        'bill_reference' => '8752018',
        'amount' => 0,
        'customer_name' => 'Samuel',
        'mpesa_ref' => 'REF123',
    ]);

    $sms->created_at = Carbon::parse(
        '2026-06-20 12:07:06'
    );

    $message = $this->builder->build($sms);

    expect($message)
        ->toContain('KES 0.00');
});

it('includes all transaction details', function (): void {
    $sms = new SmsQueue([
        'recipient_name' => 'John Doe',
        'bill_reference' => 'INV001',
        'amount' => 500,
        'customer_name' => 'Jane Smith',
        'mpesa_ref' => 'ABC123XYZ',
    ]);

    $sms->created_at = Carbon::parse(
        '2026-07-01 08:30:00'
    );

    $message = $this->builder->build($sms);

    expect($message)
        ->toContain('John Doe')
        ->toContain('INV001')
        ->toContain('500.00')
        ->toContain('Jane Smith')
        ->toContain('ABC123XYZ')
        ->toContain('01-07-2026 08:30 AM');
});
