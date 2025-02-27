<?php

namespace Modules\BidProposalManagement\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidProposal extends Model
{
    use HasFactory;

    protected $table = 'bid_proposals';
    protected $primar_key = 'id';

    protected $fillable = [
        'tutor_jobs_id',
        'teacher_id',
        'proposal_details',
        'bid_price',
        'status'
    ];
}
