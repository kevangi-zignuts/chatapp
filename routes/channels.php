<?php

use App\Models\User;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('chat-channel.{userId}', function (User $user, $userId) {
<<<<<<< HEAD
=======
    dd('here');
>>>>>>> e54fcfcb11892ea9223b55a11407519dc2c00d8c
    return (int)$user->id === (int) $userId;
});
