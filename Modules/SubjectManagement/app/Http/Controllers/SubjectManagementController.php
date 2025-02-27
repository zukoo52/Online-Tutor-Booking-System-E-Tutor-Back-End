<?php

namespace Modules\SubjectManagement\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Modules\SubjectManagement\app\Models\Subject;
use Modules\SubjectManagement\app\Repositaries\SubjectInterface;
use Modules\SubjectManagement\app\Repositaries\SubjectImplementations;
use Modules\SubjectManagement\app\Http\Requests\AddSubjectRequest;
use Modules\SubjectManagement\app\Http\Requests\UpdateSubjectRequest;


class SubjectManagementController extends Controller
{
    protected $interface;
    // contructor

    public function __construct(SubjectInterface $interfce)
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
    public function store(AddSubjectRequest $request)
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


    public function show($id)
    {
        return view('subjectmanagement::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('subjectmanagement::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request,Subject $id)
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
    public function destroy(Subject $id)
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
