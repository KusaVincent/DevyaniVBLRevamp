<?php

declare(strict_types=1);

namespace App\Models;

use App\Enum\ProcessSMSTxn;
use App\Enum\Status;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, string $transactionId)
 * @method static create(array $array)
 *
 * @property mixed $transaction_id
 * @property mixed $bill_reference
 * @property mixed $customer_name
 * @property mixed $created_at
 */
class ConfirmationTransaction extends Model
{
    #[\Override]
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
        'created_at',
    ];

    #[\Override]
    protected $attributes = [
        'process' => ProcessSMSTxn::YES,
        'status' => Status::PENDING,
    ];

    #[\Override]
    protected function casts(): array
    {
        return [
            'status' => Status::class,
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'process' => ProcessSMSTxn::class,
        ];
    }

    protected function customerName(): Attribute
    {
        return Attribute::make(
            set: fn (?string $value): string => ucwords(mb_strtolower(trim($value ?? ''), 'UTF-8')),
        );
    }
}
