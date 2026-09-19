<?php

declare(strict_types=1);

namespace App\Enum;

use Filament\Support\Colors\Color;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum Status: int implements HasColor, HasIcon, HasLabel
{
    case PENDING = 0;
    case PROCESSING = 1;
    case PROCESSED = 2;
    case FAILED = 3;
    case ABANDONED = 4;

    public function getLabel(): string
    {
        return match ($this) {
            self::FAILED => 'Failed',
            self::PENDING => 'Pending',
            self::PROCESSED => 'Processed',
            self::ABANDONED => 'Abandoned',
            self::PROCESSING => 'Processing',
        };
    }

    public function getColor(): array
    {
        return match ($this) {
            self::FAILED => Color::Amber,
            self::ABANDONED => Color::Red,
            self::PENDING => Color::Yellow,
            self::PROCESSED => Color::Green,
            self::PROCESSING => Color::Teal,
        };
    }

    public function getIcon(): Heroicon
    {
        return match ($this) {
            self::PROCESSED => Heroicon::Check,
            self::PENDING => Heroicon::QuestionMarkCircle,
            self::PROCESSING => Heroicon::EllipsisHorizontal,
            self::FAILED, self::ABANDONED => Heroicon::XMark,
        };
    }
}
