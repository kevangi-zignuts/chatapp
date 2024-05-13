<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\User;
use App\Models\Message;
use App\Events\MessageSend;
=======
use App\Events\MessageEvent;
use App\Models\User;
use App\Models\Message;
>>>>>>> e54fcfcb11892ea9223b55a11407519dc2c00d8c
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public $messagesArray = [];

    public function index()
    {
        $users = User::where('id', '!=', auth()->user()->id)->get();
        return view('dashboard', ['users' => $users]);
    }

    public function chat($id)
    {
        $user = User::findOrFail($id);
        $senderId = auth()->user()->id;
        $receiverId = $id;

        $messages = Message::where(function ($query) use ($senderId, $receiverId) {
            $query->where('sender_id', $senderId)
                ->where('receiver_id', $receiverId);
        })->orWhere(function ($query) use ($senderId, $receiverId) {
            $query->where('sender_id', $receiverId)
                ->where('receiver_id', $senderId);
        })->with('sender', 'receiver')->get();

        foreach ($messages as $message) {
            $this->appendChatMessage($message);
        }

        return view('chat', ['user' => $user, 'senderId' => $senderId, 'receiverId' => intval($receiverId), 'messages' => $this->messagesArray]);
    }

    public function sendMessage(Request $request)
    {
        $message = Message::create([
            'message' => $request->input('message'),
            'sender_id' => $request->input('sender_id'),
            'receiver_id' => $request->input('receiver_id'),
        ]);
        $this->appendChatMessage($message);
<<<<<<< HEAD
        broadcast(new MessageSend($message))->toOthers();
        // MessageSend::dispatch($message);
        
=======
        broadcast(new MessageEvent($message))->toOthers();

>>>>>>> e54fcfcb11892ea9223b55a11407519dc2c00d8c
        return response()->json(['message' => 'Form submitted successfully']);
    }

    public function appendChatMessage($message)
    {
        $this->messagesArray[] = [
            'id' => $message->id,
            'message' => $message->message,
            'sender'   => $message->sender->name,
            'senderId'   => $message->sender->id,
            'receiver' => $message->receiver->name,
            'receiverId' => $message->receiver->id,
        ];
    }
}
