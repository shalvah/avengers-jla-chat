<?php

namespace App\Providers;

use App\User;
use Chatkit\Laravel\Facades\Chatkit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        User::created(function (User $user) {
            // create Chatkit user
            $userId = $user->email;
            Chatkit::createUser($userId, $user->name);
        });
    }
}
