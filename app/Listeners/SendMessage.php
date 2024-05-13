<?php

namespace App\Listeners;

use App\Models\Message;
use App\Events\MessageEvent;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMessage
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     */
    public function handle(MessageEvent $event): void
    {
        $message = $event->message->toArray();
        $chatMessage = Message::whereId($message['id'])->with('sender', 'receiver')->first();
    }
}
