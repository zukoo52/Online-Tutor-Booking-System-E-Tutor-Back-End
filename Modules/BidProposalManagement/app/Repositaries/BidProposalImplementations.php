<?php

namespace Modules\BidProposalManagement\app\Repositaries;

use Modules\BidProposalManagement\app\Repositaries\BidProposalInterface;

use Modules\UserManagement\app\Models\User;
use Modules\BidProposalManagement\app\Models\BidProposal;
use Illuminate\Validation\ValidationException;

class BidProposalImplementations implements BidProposalInterface
{


    public function index()
    {
        $BidProposal = BidProposal::select(
            'id',
            //'subject_name',
            'tutor_jobs_id',
            'teacher_id',
            'proposal_details',
            'bid_price',
            'status'
        )->get();


        return $BidProposal;
    }


    public function store($data)
    {
        $user = auth('api')->user();
        $data['teacher_id'] = $user->id;
        
        $BidProposal = BidProposal::create($data);

        //bid count deascreas
        $user = User::where('id', '=', $data['teacher_id'])->first();

        if ($user->bid_count > 0) {
            $user->bid_count = $user->bid_count - 1;
        } else {
            throw ValidationException::withMessages([
                'error' => 'Bid Count is not enough'
            ]);
        }

        return  $BidProposal;
    }

    public function update($data, $id)
    {
        // Update subject
        $id->update($data);
    }
    public function delete($id)
    {
        // Delete subject
        $id->delete();
    }
}
