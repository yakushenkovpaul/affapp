<?php

namespace App\Providers;

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
        'App\Events\UserRegisteredEmail' => [
            'App\Listeners\UserRegisteredEmailListener',
        ],
        'App\Events\UserReferred' => [
            'App\Listeners\RewardUser',
        ],
        'App\Events\UserInvite' => [
            'App\Listeners\UserInviteListener',
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

        //
    }
}
