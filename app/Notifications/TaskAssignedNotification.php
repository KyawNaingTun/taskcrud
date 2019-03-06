<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class TaskAssignedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $task;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($task)
    {
        $this->task = $task;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        // return (new MailMessage)
        //             ->greeting('Hello '. $this->task->assignee->name)
        //             ->line($this->task->subject)
        //             ->line(['Subject/Objective'=>$this->task->subject])
        //             ->line([
        //                 'Subject/Objective' => $this->task->subject,
        //                 'Due Date' => $this->task->due_at,
        //                 'Priority' => $this->task->priority,
        //                 'Task Type' => $this->task->type,
        //                 'Company' => $this->task->company,
        //                 'Contact' => $this->task->contact,
        //                 'Created By' => $this->task->creator->name,
        //             ])
        //             ->action('Notification Action', url('/'))
        //             ->line('Thank you for using our application!');

        return (new MailMessage)->view(
                'emails.task-assigned-mail',
                [
                    'task' => $this->task,
                    'creator' => $this->task->creator,
                    'assignee' => $this->task->assignee
                ]
        );
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
