<?php

declare(strict_types=1);

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

final class ConfirmationMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(
        public string $subjectText,
        public string $header,
        public string $messageBody,
        public ?string $attachment = null,
    ) {}

    public function build(): self
    {
        $mail = $this
            ->subject($this->subjectText)
            ->html(
                "
                <html>
                    <body>
                        <h3>{$this->header}</h3>
                        <div>{$this->messageBody}</div>
                    </body>
                </html>
                "
            );

        if (
            $this->attachment !== null &&
            file_exists($this->attachment)
        ) {
            $mail->attach($this->attachment);
        }

        return $mail;
    }
}
