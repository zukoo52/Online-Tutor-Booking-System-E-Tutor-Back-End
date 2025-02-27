<?php

namespace Modules\ReviewManagement\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'reviews';
    protected $primar_key = 'id';

    protected $fillable = [
        'student_id',
        'teacher_id',
        'tutor_jobs_id',
        'rating',
        'review_text'
    ];
}
