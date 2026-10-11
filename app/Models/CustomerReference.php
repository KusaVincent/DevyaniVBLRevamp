<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * @property mixed $name
 * @property mixed $mobile
 *
 * @method static updateOrCreate(string[] $array, string[] $reference)
 */
#[Guarded([])]
final class CustomerReference extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    /**
     * @return Attribute<never, string>
     */
    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn (?string $value): string => ($value ?? '')
                    |> mb_trim(...)
                    |> (fn ($x): string => mb_strtolower($x, 'UTF-8'))
                    |> ucwords(...),
        );
    }
}
