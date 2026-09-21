<?php

declare(strict_types=1);

namespace App\Exceptions\Confirmation;

final class BusinessProfileNotFoundException extends ConfirmationException
{
    public function __construct(public readonly string $businessShortCode)
    {
        parent::__construct(sprintf('Business shortcode %s is not maintained.', $businessShortCode));
    }
}
