<?php

declare(strict_types=1);

namespace App\Enum;

use Filament\Support\Colors\Color;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum UserStatus: int implements HasColor, HasIcon, HasLabel
{
    case INACTIVE = 0;
    case ACTIVE = 1;

    public function getLabel(): string
    {
        return match ($this) {
            self::ACTIVE => 'Active',
            self::INACTIVE => 'In Active',
        };
    }

    public function getColor(): array
    {
        return match ($this) {
            self::ACTIVE => Color::Green,
            self::INACTIVE => Color::Yellow,
        };
    }

    public function getIcon(): Heroicon
    {
        return match ($this) {
            self::ACTIVE => Heroicon::Check,
            self::INACTIVE => Heroicon::XMark,
        };
    }
}
