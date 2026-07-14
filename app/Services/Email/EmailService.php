<?php

namespace App\Services\Email;

use App\Contracts\Email\EmailServiceInterface;
use App\Exceptions\Email\EmailDeliveryException;
use App\Mail\ConfirmationMail;
use App\Services\Logging\LoggingService;
use Illuminate\Support\Facades\Mail;
use Throwable;

readonly class EmailService implements EmailServiceInterface
{
    public function __construct(private LoggingService $logger)
    {
        //
    }

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
                $this->logger->error($e->getMessage());

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
