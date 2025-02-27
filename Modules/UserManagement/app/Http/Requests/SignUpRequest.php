<?php

namespace Modules\UserManagement\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
            'id' => '',
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
            'address' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'role' => 'required',
            'bid_count' =>'',
            'subject_id' => 'required|exists:subjects,id'
        ];
    }
}
