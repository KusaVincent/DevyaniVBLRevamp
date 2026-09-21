<?php

declare(strict_types=1);

namespace App\Exceptions\Confirmation;

use Exception;

final class ConfirmationException extends Exception
{
    public function resultCode(): int
    {
        return 1;
    }

    public function resultDescription(string $message): string
    {
        return app()->isProduction() ? $message : $this->getMessage();
    }
}
