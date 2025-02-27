<?php

namespace Modules\ReviewManagement\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReviewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'student_id' => "required",
            'teacher_id' => "required",
            'tutor_jobs_id' => "required|string",
            'rating' => "required",
            'review_text' => "required|string"
        ];
    }
}
