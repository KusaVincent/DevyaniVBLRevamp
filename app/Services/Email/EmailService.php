<?php

namespace App\Services\Email;

use App\Exceptions\Email\EmailDeliveryException;
use App\Mail\ConfirmationMail;
use Illuminate\Support\Facades\Mail;
use Throwable;

class EmailService
{
    public function send(
        array $recipients,
        string $subject,
        string $header,
        string $message,
        ?string $attachment = null,
    ): void {
        foreach ($recipients as $recipient) {
            try {
                Mail::to($recipient)->send(
                    new ConfirmationMail(
                        subjectText: $subject,
                        header: $header,
                        messageBody: $message,
                        attachment: $attachment,
                    )
                );
            } catch (Throwable $e) {
                throw new EmailDeliveryException(
                    recipient: $recipient,
                    response: [
                        'exception' => get_class($e),
                        'message' => $e->getMessage(),
                    ],
                    previous: $e,
                );
            }
        }
    }
}
