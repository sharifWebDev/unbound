<?php

namespace App\Notifications\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VerifyEmailNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(
        public string $verificationUrl
    ) {}

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Verify Your Email Address')
            ->markdown('emails.admin.verify-email', [
                'verificationUrl' => $this->verificationUrl,
                'user' => $notifiable,
            ]);
    }

    public function toArray($notifiable): array
    {
        return [
            //
        ];
    }
}
