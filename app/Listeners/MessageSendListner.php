<?php

namespace App\Listeners;

use App\Models\Message;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageSendListner
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        $message = $event->message;
        $chatMessage = Message::whereId($message->id)->with('sender', 'receiver')->first();
    }
}
