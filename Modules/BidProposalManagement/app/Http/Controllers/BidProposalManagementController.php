<?php

namespace Modules\BidProposalManagement\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Modules\BidProposalManagement\app\Repositaries\BidProposalInterface;
use Modules\BidProposalManagement\app\Http\Requests\AddBidProposalRequest;
use Modules\BidProposalManagement\app\Http\Requests\UpdateBidProposalRequest;
use Modules\BidProposalManagement\app\Models\BidProposal;
class BidProposalManagementController extends Controller
{

    protected $interface;
    public function __construct(BidProposalInterface $interfce)
    {
        $this->interface = $interfce;
    }


    public function index()
    {
        try {
            $response =  $this->interface->index();
            return response()->json([
                'data' =>  $response
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 500);
        }

    }


    public function create()
    {
        return view('bidproposalmanagement::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddBidProposalRequest $request)
    {
        $validateddata = $request->validated();
        try {
            $response =  $this->interface->store($validateddata);
            return response()->json([
                'data' =>  $response,
                'message' => 'SuccessFully Created',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('bidproposalmanagement::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('bidproposalmanagement::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBidProposalRequest $request, BidProposal $id)
    {
        $validateddata = $request->validated();
        try {
            $response =  $this->interface->update($validateddata , $id);
            return response()->json([
                'data' =>  $response,
                'message' => 'SuccessFully Updated',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BidProposal $id)
    {
        try {
            $response =  $this->interface->delete($id);
            return response()->json([
                'data' =>  $response,
                'message' => 'SuccessFully Deleted',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
