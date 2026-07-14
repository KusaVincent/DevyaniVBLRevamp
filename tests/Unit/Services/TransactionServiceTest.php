<?php

declare(strict_types=1);

use App\Data\ConfirmationRequestData;
use App\Enum\ProcessSMSTxn;
use App\Exceptions\Confirmation\DuplicateTransactionException;
use App\Models\ConfirmationTransaction;
use App\Services\Confirmation\TransactionService;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->service = new TransactionService();
});

function makeTransactionConfirmationRequest(string $transactionId = 'UGNMQQAC9AU'): ConfirmationRequestData {
    return new ConfirmationRequestData(
        hash: '',
        mobile: '254712345678',
        amount: '1100.0',
        username: 'username',
        password: 'password',
        createdAt: '2026-06-20 12:07:06',
        customerName: 'Samuel',
        billReference: '8752018',
        transactionId: $transactionId,
        transactionTime: '20260620120439',
        transactionType: 'PAYBILL',
        businessShortCode: '488489',
    );
}

it('does not throw when transaction is unique', function () {
    $this->service->ensureNotDuplicate(makeTransactionConfirmationRequest());

    expect(true)->toBeTrue();
});

it('throws when transaction already exists', function () {
    ConfirmationTransaction::create([
        'process' => ProcessSMSTxn::YES,
        'amount' => '1100.0',
        'customer_name' => 'Samuel',
        'transaction_id' => 'UGNMQQAC9AU',
        'bill_reference' => '8752018',
        'transaction_time' => '20260620120439',
        'business_short_code' => '488489',
    ]);

    $this->service->ensureNotDuplicate(makeTransactionConfirmationRequest());
})->throws(DuplicateTransactionException::class);

it('stores a confirmation transaction', function () {
    $request = makeTransactionConfirmationRequest();

    $this->service->store($request,ProcessSMSTxn::YES);

    $this->assertDatabaseCount(
        'confirmation_transactions',
        1,
    );

    $this->assertDatabaseHas(
        'confirmation_transactions',
        [
            'transaction_id' => 'UGNMQQAC9AU',
            'customer_name' => 'Samuel',
            'bill_reference' => '8752018',
            'business_short_code' => '488489',
            'amount' => '1100.0',
            'process' => ProcessSMSTxn::YES->value,
        ]
    );
});

it('stores process flag correctly', function () {
    $request = makeTransactionConfirmationRequest(transactionId: 'ABC123456', );

    $this->service->store($request, ProcessSMSTxn::NO);

    $this->assertDatabaseHas(
        'confirmation_transactions',
        [
            'transaction_id' => 'ABC123456',
            'process' => ProcessSMSTxn::NO->value,
        ]
    );
});

it('can store multiple unique transactions', function () {
    $this->service->store(
        makeTransactionConfirmationRequest('TXN001'), ProcessSMSTxn::YES,
    );

    $this->service->store(
        makeTransactionConfirmationRequest('TXN002'), ProcessSMSTxn::YES,
    );

    $this->assertDatabaseCount(
        'confirmation_transactions',
        2,
    );
});
