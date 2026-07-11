<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $name
 * @property mixed $mobile
 * @method static updateOrCreate(string[] $array, string[] $reference)
 */
class CustomerReference extends Model
{
    protected $fillable = [
        'reference',
        'mobile',
        'name',
    ];

    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn (?string $value) => ucwords(mb_strtolower(trim($value ?? ''), 'UTF-8')),
        );
    }
}
