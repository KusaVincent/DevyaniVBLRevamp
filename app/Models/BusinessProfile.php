<?php

declare(strict_types=1);

namespace App\Models;

use App\Enum\BusinessProfileStatus;
use App\Enum\BusinessProfileType;
use App\Services\Sap\SapConfiguration;
use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Override;

/**
 * @property string $username
 * @property string $password
 * @property string $business_short_code
 * @property string $sap_file
 * @property string $business_transaction
 * @property string $area_code
 * @property string $profit_center
 * @property array $sap_headers
 * @property string $secret_key
 * @property mixed $credit_account
 *
 * @method static static updateOrCreate(array<string, mixed> $attributes, array<string, mixed> $values)
 */
#[Guarded([])]
#[Hidden(['password', 'secret_key'])]
final class BusinessProfile extends Model
{
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
