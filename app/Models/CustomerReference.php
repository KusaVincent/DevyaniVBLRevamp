<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $name
 * @property mixed $mobile
 *
 * @method static updateOrCreate(string[] $array, string[] $reference)
 */
#[Guarded([])]
final class CustomerReference extends Model
{
    /**
     * @return Attribute<never, string>
     */
    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn (?string $value): string => ''
                    |> mb_trim(...)
                    |> (fn ($x): string => mb_strtolower($x, 'UTF-8'))
                    |> ucwords(...),
        );
    }
}
