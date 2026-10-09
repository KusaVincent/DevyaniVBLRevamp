<?php

declare(strict_types=1);

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PasswordExpiringNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(public readonly int $daysRemaining)
    {
        //
    }

    public function via(mixed $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(mixed $notifiable): MailMessage
    {
        $changePasswordUrl = route('filament.mpesa.pages.force-password-change');

        return (new MailMessage)
            ->subject('Action Required: Your Password Expires Soon')
            ->greeting("Hello {$notifiable->name},")
            ->line("Your password is set to expire in {$this->daysRemaining} ".($this->daysRemaining === 1 ? 'day' : 'days').'.')
            ->line('Please update your password now to avoid being locked out of your account.')
            ->action('Change Password Now', $changePasswordUrl)
            ->line('Thank you for keeping your account secure.');
    }
}
