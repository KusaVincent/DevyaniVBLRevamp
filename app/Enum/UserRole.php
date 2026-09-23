<?php

declare(strict_types=1);

namespace App\Enum;

use Filament\Support\Colors\Color;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum UserRole: int implements HasColor, HasIcon, HasLabel
{
    case NORMAL = 0;
    case ADMIN = 1;

    public function getLabel(): string
    {
        return match ($this) {
            self::ADMIN => 'Admin',
            self::NORMAL => 'Normal',
        };
    }

    public function getColor(): array
    {
        return match ($this) {
            self::ADMIN => Color::Sky,
            self::NORMAL => Color::Teal,
        };
    }

    public function getIcon(): Heroicon
    {
        return match ($this) {
            self::NORMAL => Heroicon::User,
            self::ADMIN => Heroicon::UserPlus,
        };
    }
}
