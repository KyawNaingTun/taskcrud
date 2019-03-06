<?php

namespace App\Listeners;

use App\Events\TaskAssignedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
//notifications
use App\Notifications\TaskAssignedNotification;
//model
use App\User;

class TaskAssignedListener implements ShouldQueue
{
    use InteractsWithQueue;
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
     * @param  TaskAssigned  $event
     * @return void
     */
    public function handle(TaskAssignedEvent $event)
    {
        $user = User::find($event->task->assigned_id);
        //send notification to assigned user
        $user->notify(new TaskAssignedNotification($event->task));
    }
}
