<?php

namespace App\Listeners;

use App\Events\UserRegister;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubscribeUser implements ShouldQueue
{
    public $subscribeEmail ;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(\App\Http\Controllers\MailChimpController $subscribeEmail)
    {
        $this->subscribeEmail = $subscribeEmail;
    }

    /**
     * Handle the event.
     *
     * @param  UserRegister  $event
     * @return void
     */
    public function handle(UserRegister $event)
    {
        $to_email = $event->user->email;
        \Log::warning($event->subscribe);
        if ($event->subscribe == true) {
            $this->subscribeEmail->subscribeOnRegister($to_email);
        }

    }
}
