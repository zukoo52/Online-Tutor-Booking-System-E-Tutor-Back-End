<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\TutorJobCreation;
use Modules\TutorJobManagement\app\Models\TutorJob;

class AddTutorJob
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
    public function handle(TutorJobCreation $event): void
    {
        // get event data to attach data obj
        $data = $event->data;

        $Tjob = new TutorJob();
        $user = auth('api')->user();

        $Tjob->student_id = $user->id;
        $Tjob->job_title = $data['job_title'];
        $Tjob->subject_id = $data['subject_id']['id'];
        $Tjob->job_description = $data['job_description'];
        $Tjob->Grade = $data['Grade'];
        $Tjob->Meeting_type = $data['Meeting_type'];
        $Tjob->payment_type = $data['payment_type'];
        $Tjob->payment_rate = $data['payment_rate'];
        $Tjob->additional_details = $data['additional_details'];

        $Tjob->save();
    }
}
