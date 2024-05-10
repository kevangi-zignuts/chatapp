<?php

namespace App\Providers;

use App\Events\MessageEvent;
use App\Listeners\SendMessage;
use Illuminate\Support\ServiceProvider;
use Illuminate\Events\Dispatcher;
use Illuminate\Support\Facades\Event;

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
            MessageEvent::class,
            SendMessage::class,
        );
    }
}
