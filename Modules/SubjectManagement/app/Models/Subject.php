<?php

namespace Modules\SubjectManagement\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = 'subjects';
    protected $primar_key = 'id';

    protected $fillable = [

        'subject_name'

    ];
}
