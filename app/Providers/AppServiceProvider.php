<?php

namespace App\Providers;

use App\Events\MessageSend;
use App\Listeners\MessageSendListner;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

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
            MessageSend::class,
            MessageSendListner::class,
        );
    }
}
