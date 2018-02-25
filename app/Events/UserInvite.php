<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserInvite
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $email;
    public $link;
    public $code;

    /**
     * Create a new event instance.
     *
     * UserInvite constructor.
     * @param $email
     * @param $link
     */

    public function __construct($user, $email, $link, $code)
    {
        $this->user = $user;
        $this->email = $email;
        $this->link = $link;
        $this->code = $code;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
