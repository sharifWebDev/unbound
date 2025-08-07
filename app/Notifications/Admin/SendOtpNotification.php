<?php

namespace App\Notifications\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendOtpNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(
        public string $otp,
        public int $expiryMinutes = 10
    ) {
    }

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Your Admin Portal OTP Code')
            ->markdown('emails.admin.otp', [
                'otp' => $this->otp,
                'expiryMinutes' => $this->expiryMinutes,
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
