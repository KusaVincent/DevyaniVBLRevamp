<?php

declare(strict_types=1);

namespace App\Models;

use App\Enum\ProcessSMSTxn;
use App\Enum\Status;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Override;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * @method static where(string $string, string $transactionId)
 * @method static static create(array<string, mixed> $attributes)
 *
 * @property mixed $transaction_id
 * @property mixed $bill_reference
 * @property mixed $customer_name
 * @property mixed $created_at
 */
#[Fillable(['transaction_id', 'transaction_time', 'bill_reference', 'customer_name', 'amount', 'status', 'authenticated', 'business_short_code', 'process', 'created_at', 'narrative', 'ft_ref', 'supplied_till'])]
final class ConfirmationTransaction extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    #[Override]
    protected $attributes = [
        'process' => ProcessSMSTxn::YES,
        'status' => Status::PENDING,
    ];

    public function businessProfile(): BelongsTo
    {
        return $this->belongsTo(
            BusinessProfile::class,
            'business_short_code',
            'business_short_code'
        );
    }

    #[Override]
    protected function casts(): array
    {
        return [
            'status' => Status::class,
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'process' => ProcessSMSTxn::class,
        ];
    }

    /**
     * @return Attribute<never, string>
     */
    protected function customerName(): Attribute
    {
        return Attribute::make(
            set: fn (?string $value): string => ($value ?? '')
                    |> mb_trim(...)
                    |> (fn ($x): string => mb_strtolower($x, 'UTF-8'))
                    |> ucwords(...),
        );
    }
}
