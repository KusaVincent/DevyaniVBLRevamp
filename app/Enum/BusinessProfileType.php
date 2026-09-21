<?php

declare(strict_types=1);

namespace App\Enum;

use Filament\Support\Colors\Color;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum BusinessProfileType: int implements HasColor, HasIcon, HasLabel
{
    case NORMAL = 0;
    case NCBA_TILL = 1;

    public function getLabel(): string
    {
        return match ($this) {
            self::NORMAL => 'Normal',
            self::NCBA_TILL => 'Till',
        };
    }

    public function getColor(): array
    {
        return match ($this) {
            self::NORMAL => Color::Teal,
            self::NCBA_TILL => Color::Sky,
        };
    }

    public function getIcon(): Heroicon
    {
        return match ($this) {
            self::NORMAL => Heroicon::QuestionMarkCircle,
            self::NCBA_TILL => Heroicon::Check,
        };
    }
}
