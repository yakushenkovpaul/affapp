<?php

namespace App\Listeners;

use App\Events\UserInvite;
use App\Notifications\NewInviteEmail;
use Illuminate\Support\Facades\Notification;

class UserInviteListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserInvite  $event
     * @return void
     */
    public function handle(UserInvite $event)
    {
        Notification::route('mail', $event->email)
            ->notify(new NewInviteEmail($event->user, $event->link, $event->code));
    }
}
