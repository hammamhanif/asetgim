<?php

namespace App\Listeners;

use App\Models\LogDB;
use Illuminate\Auth\Events\Failed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LoginFailed
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
    public function handle(Failed $event): void
    {
        $email = isset($event->credentials['email']) ? $event->credentials['email'] : 'N/A';

        LogDB::record(
            $event->user,
            'failed to login',
            $email . ' | ' . $event->credentials['password']
        );
    }
}
