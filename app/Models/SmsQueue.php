<?php

declare(strict_types=1);

namespace App\Models;

use App\Enum\ProcessSMSTxn;
use App\Enum\Status;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Override;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * @method static static create(array<string, mixed> $attributes)
 *
 * @property mixed $bill_reference
 * @property mixed $amount
 * @property mixed $customer_name
 * @property mixed $created_at
 * @property mixed $mpesa_ref
 */
#[Fillable(['status', 'mpesa_ref', 'bill_reference', 'amount', 'created_at', 'processed_at', 'customer_name', 'recipient_name', 'recipient_mobile', 'post', 'process', 'response', 'error', 'next_retry_at', 'attempts'])]
final class SmsQueue extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    #[Override]
    public $timestamps = false;

    #[Override]
    protected $attributes = [
        'status' => Status::PENDING,
        'process' => ProcessSMSTxn::YES,
        'attempts' => 0,
    ];

    #[Override]
    protected function casts(): array
    {
        return [
            'response' => 'array',
            'status' => Status::class,
            'created_at' => 'datetime',
            'processed_at' => 'datetime',
            'next_retry_at' => 'datetime',
            'process' => ProcessSMSTxn::class,
        ];
    }

    /**
     * @return Attribute<never, string>
     */
    protected function customerName(): Attribute
    {
        return Attribute::make(
            set: fn (?string $value): string => ''
                    |> mb_trim(...)
                    |> (fn ($x): string => mb_strtolower($x, 'UTF-8'))
                    |> ucwords(...),
        );
    }
}
