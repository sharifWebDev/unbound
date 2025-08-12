<?php

namespace App\Notifications\Customer;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPasswordNotification extends Notification
{
    protected $url;

    protected $customer;

    public function __construct($url, $customer)
    {
        $this->url = $url;
        $this->customer = $customer;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Password Reset Request')
            ->greeting('Hello '.$this->customer->full_name.',')
            ->line('You requested a password reset. Click the button below to reset your password.')
            ->action('Reset Password', $this->url)
            ->line('This link will expire in 20 minutes.')
            ->line('If you did not request this, please ignore this email.');
    }
}
