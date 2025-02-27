<?php

namespace Modules\UserManagement\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Modules\UserManagement\app\Http\Requests\SignUpRequest;
use Modules\UserManagement\app\Http\Requests\SignInRequest;
use Modules\UserManagement\app\Models\User;
use Modules\SubjectManagement\app\Models\TeacherSubject;
use Auth;


class AuthController extends Controller
{
    //  user registration

    public function register(SignUpRequest $request)
    {

                                    // add user
       $data =  $request->validated();
        $data['password'] = bcrypt($data['password']);

                                     //adding bid count as a 5
        if ($data['role'] === "Teacher") {
            $data['bid_count'] = 5;
        }


        $user = User::create($data);
        $user->assignRole($data['role']);


        if ($data['role'] === "Teacher") {
            if (isset($data['subject_id'])) {


                $techerSubject =  new TeacherSubject();
                $techerSubject->teacher_id = $user->id;
                $techerSubject->subject_id = $data['subject_id'];
                $techerSubject->save();
            } else {
                return response()->json(['errod' => 'subject id is required for teachers'], 422);
            }
        }
        return response()->json([
            'message' => 'Teacher registered successfully.',
            'user' => $user
        ]);
    }

    // user login
    public function login(SignInRequest $request)

    {
        $data  = $request->validated();

        if (!Auth::attempt($data)) {
            throw ValidationException::withMessages([
                'message' => 'Email Or Password Invalid',
            ]);
        } else {
            return [
                'data' => auth()->user(),
                'message' => 'SuccessFully LoggedIn',
                'token' => auth()
                    ->user()
                    ->createToken('api-system-user')->accessToken,
                'roles' => auth()
                    ->user()
                    ->rolesWithPermissions()
                    ->get(),
            ];
        }
    }

    public function logout()
    {
        $user = Auth::user()->token();
        $user->revoke();
        return response([
            'message' => 'logged out',
        ]);
    }
}
