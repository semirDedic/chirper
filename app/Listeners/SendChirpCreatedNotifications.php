<?php

namespace App\Listeners;

use App\Events\ChirpCreated;
use App\Models\User;
use App\Notifications\NewChirp;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendChirpCreatedNotifications implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ChirpCreated $event): void
    {
        // chunk
        User::whereNot('id', $event->chirp->user_id)->chunk(200, function ($users) use ($event) {
            foreach ($users as $user) {
                $user->notify(new NewChirp($event->chirp));
            }
        });

        // cursor
        //foreach (User::whereNot('id', $event->chirp->user_id)->cursor() as $user) {
        //   $user->notify(new NewChirp($event->chirp));
        //}
    }
}
