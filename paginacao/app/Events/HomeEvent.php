<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class HomeEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $text;    

    public function __construct($text)
    {
        $this->text =  $text;
    }

    
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }


}
