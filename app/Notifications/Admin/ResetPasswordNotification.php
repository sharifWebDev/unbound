<?php

namespace App\Notifications\Admin;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPasswordNotification extends Notification
{
    protected $url;

    protected $user;

    public function __construct($url, $user)
    {
        $this->url = $url;
        $this->user = $user;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Password Reset Request')
            ->greeting('Hello '.$this->user->full_name.',')
            ->line('You requested a password reset. Click the button below to reset your password.')
            ->action('Reset Password', $this->url)
            ->line('This link will expire in 20 minutes.')
            ->line('If you did not request this, please ignore this email.');
    }
}
