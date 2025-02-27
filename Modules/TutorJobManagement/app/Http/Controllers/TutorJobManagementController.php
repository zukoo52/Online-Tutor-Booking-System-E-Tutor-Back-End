<?php

namespace Modules\TutorJobManagement\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

use Modules\TutorJobManagement\app\Models\TutorJob;
use Modules\TutorJobManagement\app\Repositaries\TutorJobInterface;
use Modules\TutorJobManagement\app\Repositaries\TutorJobImplementations;
use Modules\TutorJobManagement\app\Http\Requests\AddTutorJobRequest;
use Modules\TutorJobManagement\app\Http\Requests\UpdateTutorJobRequest;

class TutorJobManagementController extends Controller
{

    protected $interface;
    /**
     * Display a listing of the resource.
     */

    public function __construct(TutorJobInterface $interfce)
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



    /**
     * Store a newly created resource in storage.
     */
    public function store(AddTutorJobRequest $request)
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
    public function showData(Request $request)
    {
        $validateddata = $request->validate([
            'id' => 'required'
        ]);
        try {
            $response =  $this->interface->showData($validateddata);
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
     * Update the specified resource in storage.
     */
    public function update(UpdateTutorJobRequest $request, TutorJob $id)
    {
        //

        $validateddata = $request->validated();
        try {
            $response =  $this->interface->update($validateddata, $id);
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
    public function destroy(TutorJob $id)
    {
        //
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
