<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Override;

/**
 * @method static updateOrCreate(array $array, array $array1)
 */
final class BusinessTill extends Model
{
    #[Override]
    protected $guarded = [];
}
