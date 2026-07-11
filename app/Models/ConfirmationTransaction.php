<?php

namespace App\Models;

use App\Enum\ProcessSMSTxn;
use App\Enum\Status;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, string $transactionId)
 * @method static create(array $array)
 * @property mixed $transaction_id
 * @property mixed $bill_reference
 * @property mixed $customer_name
 * @property mixed $created_at
 */
class ConfirmationTransaction extends Model
{
    protected $fillable = [
        'transaction_id',
        'transaction_time',
        'bill_reference',
        'customer_name',
        'amount',
        'status',
        'authenticated',
        'business_short_code',
        'process',
    ];

    protected $attributes = [
        'process' => ProcessSMSTxn::YES,
        'status' => Status::PENDING,
    ];

    protected function casts(): array
    {
        return [
            'status' => Status::class,
            'process' => ProcessSMSTxn::class,
        ];
    }

    protected function customerName(): Attribute
    {
        return Attribute::make(
            set: fn (?string $value) => ucwords(mb_strtolower(trim($value ?? ''), 'UTF-8')),
        );
    }
}
