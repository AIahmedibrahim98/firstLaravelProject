<?php

namespace App\Providers;

use App\Events\NewUserRegEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SiteNewsEmailListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewUserRegEvent  $event
     * @return void
     */
    public function handle(NewUserRegEvent $event)
    {
        //
    }
}
