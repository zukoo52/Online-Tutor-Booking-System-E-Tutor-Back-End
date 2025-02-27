<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\TutorJobCreation;
use App\Notifications\SendEmail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Bus\Queueable;

class SendMail implements ShouldQueue
{
    use InteractsWithQueue;
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
    public function handle(TutorJobCreation $event): void
    {
        $email_data = [
            'subject' => 'Creating New Job',
            'line1' => 'The introduction to the notification.',
            'line2' => 'Thank you for using our application!'
        ];
        // send mail
        Notification::route('mail', 'yasindu@gmail.com')->notify(new SendEmail($email_data));
    }
}
