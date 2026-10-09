<?php

declare(strict_types=1);

namespace App\Models;

use App\Enum\BusinessProfileStatus;
use App\Enum\BusinessProfileType;
use App\Services\Sap\SapConfiguration;
use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Hash;
use Override;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * @property string $username
 * @property string $password
 * @property string $sap_file
 * @property string $area_code
 * @property array $sap_headers
 * @property string $secret_key
 * @property mixed $credit_account
 * @property string $profit_center
 * @property string $business_short_code
 * @property string $business_transaction
 * @property mixed $type
 *
 * @method static static updateOrCreate(array<string, mixed> $attributes, array<string, mixed> $values)
 */
#[Guarded([])]
#[Hidden(['password', 'secret_key'])]
final class BusinessProfile extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    #[Override]
    protected $attributes = [
        'type' => BusinessProfileType::NORMAL,
        'active' => BusinessProfileStatus::YES,
    ];

    public function credentialsMatch(string $username, string $password): bool
    {
        return $this->username === $username && Hash::check($password, $this->password);
    }

    public function sapConfiguration(): SapConfiguration
    {
        return new SapConfiguration($this);
    }

    public function tills(): HasMany
    {
        return $this->hasMany(BusinessTill::class);
    }

    #[Override]
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
            'sap_headers' => 'array',
            'secret_key' => 'encrypted',
            'type' => BusinessProfileType::class,
            'active' => BusinessProfileStatus::class,
        ];
    }
}
