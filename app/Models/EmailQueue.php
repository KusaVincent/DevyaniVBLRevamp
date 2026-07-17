<?php

declare(strict_types=1);

namespace App\Models;

use App\Enum\Status;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class EmailQueue extends Model
{
    #[\Override]
    protected $fillable = [
        'subject',
        'header',
        'attachment',
        'recipients',
        'status',
        'attempts',
        'next_retry_at',
        'processed_at',
        'response',
        'error',
        'message',
    ];

    #[\Override]
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

    #[\Override]
    protected $attributes = [
        'status' => Status::PENDING,
        'attempts' => 0,
    ];
}
