<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserMoventEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    protected $user, $userMovement;

    /**
     * UserMoventEvent constructor.
     * @param $user
     * @param $userMovement
     */
    public function __construct($user, $userMovement)
    {
        $this->user = $user;
        $this->userMovement = $userMovement;
    }


    public function broadcastWith()
    {
        return [
            'user' => $this->user,
            'movement' => $this->userMovement
        ];
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('socket');
    }
}
