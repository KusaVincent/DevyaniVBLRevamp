<?php

declare(strict_types=1);

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AccountUnlockedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(
        public readonly ?string $unlockedByName = null
    ) {}

    public function via(mixed $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(mixed $notifiable): MailMessage
    {
        $loginUrl = route('filament.mpesa.auth.login');

        return (new MailMessage)
            ->subject('Your Account Has Been Unlocked')
            ->greeting("Hello {$notifiable->name},")
            ->line('Your account lockout has been cleared by an administrator and you may now log in.')
            ->action('Log In to Your Account', $loginUrl)
            ->line('If you did not request this unlock, please contact your system administrator immediately.');
    }
}
