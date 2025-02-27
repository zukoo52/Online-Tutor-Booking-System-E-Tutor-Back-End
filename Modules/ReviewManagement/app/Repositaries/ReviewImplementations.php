<?php

namespace Modules\ReviewManagement\app\Repositaries;

use Modules\ReviewManagement\app\Repositaries\ReviewInterface;
use Modules\ReviewManagement\app\Models\Review;

class ReviewImplementations implements ReviewInterface
{
    public function index()
    {
        $Review = Review::select(
            'id',
            'student_id',
            'teacher_id',
            'tutor_jobs_id',
            'rating',
            'review_text'
        )->get();


        return $Review;
    }

    public function store($data)
    {

        $Review = Review::create($data);

        return $Review;
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
