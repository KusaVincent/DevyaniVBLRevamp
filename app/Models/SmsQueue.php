<?php

namespace App\Models;

use App\Enum\ProcessSMSTxn;
use App\Enum\Status;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @property mixed $name
 * @property mixed $bill_reference
 * @property mixed $amount
 * @property mixed $customer_name
 * @property mixed $created_at
 * @property mixed $mpesa_ref
 */
class SmsQueue extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'status',
        'mpesa_ref',
        'bill_reference',
        'amount',
        'created_at',
        'processed_at',
        'customer_name',
        'recipient_name',
        'recipient_mobile',
        'post',
        'process',
    ];

    protected function casts(): array
    {
        return [
            'response' => 'array',
            'status' => Status::class,
            'created_at' => 'datetime',
            'processed_at' => 'datetime',
            'process' => ProcessSMSTxn::class,
        ];
    }

    protected $attributes = [
        'status' => Status::PENDING,
        'process' => ProcessSMSTxn::YES,
        'attempts' => 0,
    ];

    protected function customerName(): Attribute
    {
        return Attribute::make(
            set: fn (?string $value) => ucwords(mb_strtolower(trim($value ?? ''), 'UTF-8')),
        );
    }
}
