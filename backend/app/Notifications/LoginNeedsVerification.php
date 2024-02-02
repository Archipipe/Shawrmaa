<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LoginNeedsVerification extends Notification
{
    use Queueable;

    protected int $login_code;

    /**
     * Create a new notification instance.
     */
    public function __construct(int $login_code)
    {
        $this->login_code = $login_code;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {

        $notifiable->update(['login_code'=>bcrypt($this->login_code)]);


        return (new MailMessage)
                    ->subject('Добро пожаловать!')
                    ->greeting('Регистрация почти закончена.')
                    ->line('Код подтверждения: '.$this->login_code)
                    ->line('Никому не сообщайте.')
                    ->salutation("\r\n\r\n С уважением,  \r\n Shawarma.");


    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
