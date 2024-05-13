<?php

namespace App\Providers;

<<<<<<< HEAD
use App\Events\MessageSend;
use App\Listeners\MessageSendListner;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
=======
use App\Events\MessageEvent;
use App\Listeners\SendMessage;
use Illuminate\Support\ServiceProvider;
use Illuminate\Events\Dispatcher;
use Illuminate\Support\Facades\Event;
>>>>>>> e54fcfcb11892ea9223b55a11407519dc2c00d8c

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(
<<<<<<< HEAD
            MessageSend::class,
            MessageSendListner::class,
=======
            MessageEvent::class,
            SendMessage::class,
>>>>>>> e54fcfcb11892ea9223b55a11407519dc2c00d8c
        );
    }
}
