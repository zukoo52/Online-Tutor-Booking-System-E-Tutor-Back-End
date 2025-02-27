<?php

namespace Modules\UserManagement\app\Repositaries;

use Modules\UserManagement\app\Models\User;

class UserImplementations implements UserInterface
{

    public function allteachers()
    {
        $teachers = User::select('users.id','users.name', 'users.email', 'users.address', 'users.phone', 'users.gender', 'users.bid_count')
            ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
            ->where('roles.name', "Teacher")
            ->get();

        return $teachers;
    }
}
