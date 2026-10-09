<?php

declare(strict_types=1);

namespace App\Models;

use App\Enum\Status;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Override;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * @property array<int, string> $recipients
 * @property string $subject
 * @property string $header
 * @property string $attachment
 * @property string $message
 * @property Status $status
 * @property int $attempts
 * @property Carbon|null $processed_at
 * @property Carbon|null $next_retry_at
 * @property mixed $new_path
 * @property mixed $archived_at_file
 *
 * @method static static create(array<string, mixed> $attributes)
 */
#[Fillable(['subject', 'header', 'attachment', 'recipients', 'status', 'attempts', 'next_retry_at', 'processed_at', 'response', 'error', 'message', 'archived_at_file'])]
final class EmailQueue extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    #[Override]
    protected $attributes = [
        'status' => Status::PENDING,
        'attempts' => 0,
    ];

    #[Override]
    protected function casts(): array
    {
        return [
            'recipients' => 'array',
            'processed_at' => 'datetime',
            'next_retry_at' => 'datetime',
            'attempts' => 'integer',
            'status' => Status::class,
        ];
    }
}
