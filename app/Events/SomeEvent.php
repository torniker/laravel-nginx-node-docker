<?php namespace App\Events;

use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class SomeEvent implements ShouldBroadcastNow
{

    public $message;

    public function __construct($msg)
    {
        $this->message = $msg;
    }

    public function broadcastOn()
    {
        return ['test-channel'];
    }
}
