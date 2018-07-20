<?php

namespace App\Listeners;

use App\Events\UserRegister;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class SendWelcomeEmail 
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
     * @param  UserRegister  $event
     * @return void
     */
    public function handle(UserRegister $event)
    {
        $name = $event->user->name;
        $to_email = $event->user->email;
        $link = url('/');

            Mail::send('emails.creation', ['name' => $name,'link'=>$link], function ($message) use ($to_email)
            {

                $message->from(env('MAIL_ACCOUNT'), env('APP_NAME')); 

                $message->to($to_email);

                $message->subject(env('APP_NAME') .' '.'Account creation');

            });
    }
}
