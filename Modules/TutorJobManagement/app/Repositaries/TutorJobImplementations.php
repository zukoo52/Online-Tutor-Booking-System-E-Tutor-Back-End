<?php

namespace Modules\TutorJobManagement\app\Repositaries;

use Exception;
use Modules\ReviewManagement\app\Http\Requests\AddTutorJobRequest;
use Modules\TutorJobManagement\app\Models\TutorJob;
use Modules\UserManagement\app\Models\User;
use Modules\SubjectManagement\app\Models\Subject;
use Modules\TutorJobManagement\app\Repositaries\TutorJobInterface;

use App\Events\TutorJobCreation;

class TutorJobImplementations implements TutorJobInterface
{
    public function index()
    {
        $TutorJobs = TutorJob::with([
            'Student:id,name',
            'subject:id,subject_name',
        ])
            ->select(
                'id',
                'student_id',
                'job_title',
                'subject_id',
                'job_description',
                'Grade',
                'Meeting_type',
                'payment_type',
                'payment_rate',
                'additional_details',
                'budget'
            )
            ->get();

        return $TutorJobs;
    }

    public function showData($data)
    {
        $TutorJob = TutorJob::select(
            'job_title',
            'job_description',
            'payment_rate',
            'Meeting_type',
            'payment_type'
        )
            ->where('id', '=', $data['id'])
            ->first();

        return $TutorJob;
    }

    public function store($data)
    {
        event(new TutorJobCreation($data));

    }
    public function update($data, $id)
    {
        // Update subject
        $id->update($data);
    }
    public function delete($id)
    {
        // Delete subject
        $id->delete();
    }
}
