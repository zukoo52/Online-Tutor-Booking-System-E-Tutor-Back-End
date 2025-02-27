<?php

namespace Modules\ReviewManagement\app\Http\Controllers;

use App\Http\Controllers\Controller;

use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\ReviewManagement\app\Repositaries\ReviewInterface;
use Modules\ReviewManagement\app\Models\Review;
use Modules\ReviewManagement\app\Repositaries\ReviewImplementations;
use Modules\ReviewManagement\app\Http\Requests\AddReviewRequest;
use Modules\ReviewManagement\app\Http\Requests\UpdateReviewRequest;

class ReviewManagementController extends Controller
{
    protected $interface;
    // contructor

    public function __construct(ReviewInterface $interfce)
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
        return view('reviewmanagement::create');
    }


    public function store(AddReviewRequest $request)
    {
        $validateddata = $request->validated();
        try {
            $response =  $this->interface->store($validateddata);
            return response()->json([
                'data' =>  $response
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
        return view('reviewmanagement::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('reviewmanagement::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReviewRequest $request,Review $id)
    {
         $validateddata = $request->validated();
        try {
            $response =  $this->interface->update($validateddata , $id);
            return response()->json([
                'data' =>  $response
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
    public function destroy(Review $id)
    {
        try {
            $response =  $this->interface->delete($id);
            return response()->json([
                'data' =>  $response
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
