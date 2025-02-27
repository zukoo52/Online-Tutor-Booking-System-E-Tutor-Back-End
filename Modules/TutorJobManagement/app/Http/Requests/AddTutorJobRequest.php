<?php

namespace Modules\TutorJobManagement\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddTutorJobRequest extends FormRequest
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
            'job_title'=> "required|string",
            'subject_id'=> "required",
            'job_description'=> "required|string",
            'Grade'=> "required|string",
            'Meeting_type'=> "required|string",
            'payment_type'=> "required|string",
            'payment_rate'=> "required|integer",
            'additional_details'=> "required|string",
        ];
    }
}
