<?php

namespace Modules\BidProposalManagement\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBidProposalRequest extends FormRequest
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
            // 'tutor_jobs_id' => "required",
            // 'teacher_id' => "required",
            'proposal_details' => "required|string",
            'bid_price' => "required",
            // 'status' => "required|string"
        ];
    }
}
