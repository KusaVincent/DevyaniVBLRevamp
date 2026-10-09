<?php

declare(strict_types=1);

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewUserCredentialsNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(
        public readonly string $plainPassword
    ) {}

    public function via(mixed $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(mixed $notifiable): MailMessage
    {
        $loginUrl = route('filament.mpesa.auth.login');

        return (new MailMessage)
            ->subject('Welcome to the Platform - Your Login Credentials')
            ->greeting("Hello {$notifiable->name},")
            ->line('An account has been created for you. You can log in using the credentials below:')
            ->line("**Login URL:** {$loginUrl}")
            ->line("**Email Address:** {$notifiable->email}")
            ->line("**Temporary Password:** {$this->plainPassword}")
            ->line('For security reasons, you will be required to change your password immediately upon your initial login.')
            ->action('Log In Now', $loginUrl)
            ->line('If you did not request this account, please contact system administration immediately.');
    }
}
