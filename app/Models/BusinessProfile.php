<?php

declare(strict_types=1);

namespace App\Models;

use App\Enum\BusinessProfileStatus;
use App\Enum\ProcessSMSTxn;
use App\Enum\Status;
use App\Services\Sap\SapConfiguration;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

/**
 * @property string $username
 * @property string $password
 * @property string $business_short_code
 * @property string $sap_file
 * @property string $business_transaction
 * @property string $area_code
 * @property string $profit_center
 * @property array  $sap_headers
 * @property string $secret_key
 * @property mixed $credit_account
 * @method static updateOrCreate(string[] $array, array $array1)
 */
class BusinessProfile extends Model
{
    protected $fillable = [
        'business_short_code',
        'username',
        'password',
        'secret_key',
        'credit_account',
    ];
    protected $guarded = [];

    protected $hidden = [
        'password',
        'secret_key',
    ];

    protected $attributes = [
        'active' => BusinessProfileStatus::YES,
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
            'sap_headers' => 'array',
            'secret_key' => 'encrypted',
            'active' => BusinessProfileStatus::class,
        ];
    }

    public function credentialsMatch(string $username, string $password): bool
    {
        return $this->username === $username && Hash::check($password, $this->password,);
    }

    public function sapConfiguration(): SapConfiguration
    {
        return new SapConfiguration($this);
    }
}
