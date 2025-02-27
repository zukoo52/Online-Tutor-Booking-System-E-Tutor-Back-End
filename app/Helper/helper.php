<?php

namespace App\Helper;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class helper
{


    public static  function create_permisions()
    {
        $permisions = [
            [
                'name' => 'Edit Teacher',
                'guard_name' => 'api',
            ],

            [
                'name' => 'Delete Admin',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Edit Student',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Add Admin',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Edit Admin',
                'guard_name' => 'api',
            ],
            [
                'name' => 'View Teachers',
                'guard_name' => 'api',
            ],
            [
                'name' => 'View Students',
                'guard_name' => 'api',
            ],
            [
                'name' => 'View All Jobs',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Add Tutor Job',
                'guard_name' => 'api',
            ],

            [
                'name' => 'Add Review',
                'guard_name' => 'api',
            ],
            [
                'name' => 'All Reviews',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Add Bid Proposal',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Delete Review',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Edit Review',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Add Subject',
                'guard_name' => 'api',
            ],
            [
                'name' => 'All Subjects',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Edit Subject',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Delete Subject',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Edit Tutor Job',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Delete Tutor Job',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Edit Bid Proposal',
                'guard_name' => 'api',
            ],
            [
                'name' => 'Delete Bid Proposal',
                'guard_name' => 'api',
            ],
            [
                'name' => 'View Bid Proposal',
                'guard_name' => 'api',
            ],

            [
                'name' => 'Approove Requests',
                'guard_name' => 'api',
            ],

        ];
        Permission::insert($permisions);
    }

    public static function createRoles()
    {
        Role::create([
            'name' => 'Admin',
            'guard_name' => 'api',
        ])->givePermissionTo([
            'Delete Admin',
            'Add Admin',
            'Approove Requests',
            'View Bid Proposal',
            'View Teachers',
            'View All Jobs',
            'All Subjects',
            'View Students',
            'All Reviews',
        ]);

        Role::create([
            'name' => 'Teacher',
            'guard_name' => 'api',
        ])->givePermissionTo([
            'Edit Teacher',
            'View Teachers',
            'View Students',
            'View All Jobs',
            'Add Bid Proposal',
            'Add Subject',
            'Edit Subject',
            'Delete Subject',
            'Edit Bid Proposal',
            'Delete Bid Proposal',
            'View Bid Proposal',
            'All Subjects',
        ]);


        Role::create([
            'name' => 'Student',
            'guard_name' => 'api',
        ])->givePermissionTo([
            'View Teachers',
            'View Students',
            'Edit Student',
            'View All Jobs',
            'Add Tutor Job' ,
            'Edit Tutor Job' ,
            'Delete Tutor Job' ,
            'Add Review',
            'Delete Review',
            'Edit Review',
            'View Bid Proposal',
            'All Subjects',
        ]);
    }
}
