<?php

namespace Modules\TutorJobManagement\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\UserManagement\app\Models\User;
use Modules\SubjectManagement\app\Models\Subject;


class TutorJob extends Model
{
    use HasFactory;

    protected $table = 'tutor_jobs';
    protected $primar_key = 'id';

    protected $fillable = [
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
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
