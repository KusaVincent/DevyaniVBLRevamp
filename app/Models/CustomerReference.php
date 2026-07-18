<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $name
 * @property mixed $mobile
 *
 * @method static updateOrCreate(string[] $array, string[] $reference)
 */
class CustomerReference extends Model
{
    #[\Override]
    protected $fillable = [
        'reference',
        'mobile',
        'name',
    ];

    /**
     * @return Attribute<never, string>
     */
    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn (?string $value): string => ucwords(mb_strtolower(trim($value ?? ''), 'UTF-8')),
        );
    }
}
