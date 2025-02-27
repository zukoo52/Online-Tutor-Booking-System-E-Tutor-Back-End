<?php

namespace Modules\SubjectManagement\app\Repositaries;

use Modules\SubjectManagement\app\Repositaries\SubjectInterface;

use Modules\SubjectManagement\app\Models\Subject;

class SubjectImplementations implements SubjectInterface
{
    public function index()
    {
        $subjects = Subject::select('id','subject_name')->get();

        return $subjects;
    }


    public function store($data)
    {

        $subject = Subject::create($data);

        return $subject;
    }
    public function update($data, $id)
    {
   
        $id->update($data);
    }
    public function delete($id)
    {

        $id->delete();
    }
}
