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
            ->subject('Du bist eingeladen!')
            ->greeting('Herzlichen Glückwunsch! Du bist eingeladen!')
            ->line('Deine Teamkollegen haben Dich nicht vergessen und haben Dich zum Donatiq eingeladen.')
            ->line('Donatiq ist eine neue Art, gemeinsam Geld zu sammeln')
            ->line('Kopiere Deinen persönlichen Einladungscode und klicke auf den Button unten, um Dich anzumelden')
            ->line('Dein persönlicher Code ist: ' . $this->code)            
            ->action('Anmelden!', $this->link);

    }
}
