<?php

namespace App\Jobs;

use Illuminate\Foundation\Queue\Queueable;
use App\Notifications\SendEmail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class StudentJobs implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $jobdata;

    /**
     * Create a new job instance.
     */
    public function __construct($jobdata)
    {
        $this->jobdata = $jobdata;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $email_data = [
            'subject' => $this->jobdata['subject'],
            'line1' =>  $this->jobdata['line1'],
            'line2' =>  $this->jobdata['line2']
        ];
        Notification::route('mail', 'yasindu@gmail.com')->notify(new SendEmail($email_data));

        // $user->notify($email_data);
    }
}
