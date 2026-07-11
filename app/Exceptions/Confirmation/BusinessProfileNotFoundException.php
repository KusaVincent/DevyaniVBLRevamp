<?php

namespace App\Exceptions\Confirmation;

class BusinessProfileNotFoundException extends ConfirmationException
{
    public function __construct(public readonly string $businessShortCode)
    {
        parent::__construct(
            "Business shortcode {$businessShortCode} is not maintained."
        );
    }
}
