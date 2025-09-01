<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class AdmissionStatusNotification extends Notification
{
    use Queueable;

    public string $status;
    public string $message;

    public function __construct(string $status, string $message)
    {
        $this->status = $status;
        $this->message = $message;
    }

    public function via($notifiable): array
    {
        return ['mail']; // You can add 'nexmo', 'database', 'sms' etc.
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject("Admission Status: " . ucfirst($this->status))
            ->greeting("Hello {$notifiable->name},")
            ->line($this->message)
            ->line('Thank you for applying to EduLegion.');
    }
}

