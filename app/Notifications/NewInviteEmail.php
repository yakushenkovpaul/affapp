<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class NewInviteEmail extends Notification
{
    /**
     * The password
     *
     * @var string
     */
    public $link;
    public $code;

    /**
     * Create a notification instance.
     *
     * @param  string  $token
     * @return void
     */
    public function __construct($link, $code)
    {
        $this->link = $link;
        $this->code = $code;
    }

    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return [
            'mail'
        ];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('You\'ve invited!')
            ->greeting('You\'ve invited!')
            ->line('Your invite code is: ' . $this->code)
            ->line('Click the link below to sing up')
            ->action('Sing up', $this->link);

    }
}
