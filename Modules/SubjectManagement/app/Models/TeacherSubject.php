<?php

namespace Modules\SubjectManagement\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\UserManagement\app\Models\User; // Import the User model
use Modules\SubjectManagement\app\Models\Subject; // Import the Subject model

class TeacherSubject extends Model
{
    use HasFactory;

    protected $table = 'teacher_subject';
    protected $primaryKey = 'id'; 

    protected $fillable = [
        'teacher_id',
        'subject_id',
    ];


    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }


    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
