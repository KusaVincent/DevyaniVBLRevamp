<?php

declare(strict_types=1);

use App\Data\ConfirmationRequestData;
use App\Models\BusinessProfile;
use App\Services\Confirmation\HashGenerator;

beforeEach(function () {
    $this->generator = new HashGenerator();

    $this->profile = new BusinessProfile([
        'secret_key' => 'secret123',
        'credit_account' => '488489',
    ]);
});

it('generates the expected hash', function () {
    $request = new ConfirmationRequestData(
        hash: '',
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

    $payload = implode('', [
        'secret123',
        'PAYBILL',
        'UGNMQQAC9AU',
        '20260620120439',
        '1100.0',
        '488489',
        '8752018',
        '254712345678',
        'SAMUEL',
        1,
    ]);

    $expected = base64_encode(
        hash('sha256', $payload)
    );

    expect(
        $this->generator->generate(
            $request,
            $this->profile,
        )
    )->toBe($expected);
});
