<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //find user
        $user = User::find(1);

        //Create Roles
        $SuperAdminRole = Role::create(['name' => 'super admin']);

        //If user found
        if ($user){
            $user->assignRole($SuperAdminRole);
        }

        //Permission List as array
        $permissions = [
            [
                'group_name' => 'slider',
                'permissions' => [
                    'slider.all',
                    'slider.create',
                    'slider.show',
                    'slider.update',
                    'slider.delete',
                    'slider.approved',
                ]
            ],
            [
                'group_name' => 'testimonial',
                'permissions' => [
                    'testimonial.all',
                    'testimonial.create',
                    'testimonial.show',
                    'testimonial.update',
                    'testimonial.delete',
                    'testimonial.approved',
                ]
            ],

             [
                'group_name' => 'product',
                'permissions' => [
                    'product.all',
                    'product.create',
                    'product.show',
                    'product.update',
                    'product.delete',
                    'product.approved',
                ]
            ],
            [
                'group_name' => 'crm',
                'permissions' => [
                    'crm.all',
                    'crm.create',
                    'crm.show',
                    'crm.update',
                    'crm.delete',
                    'crm.approved',
                ]
            ],
            [
                'group_name' => 'sms',
                'permissions' => [
                    'sms.all',
                    'sms.create',
                    'sms.show',
                    'sms.update',
                    'sms.delete',
                    'sms.approved',
                ]
            ],
            [
                'group_name' => 'messages',
                'permissions' => [
                    'messages.all',
                    'messages.create',
                    'messages.show',
                    'messages.update',
                    'messages.delete',
                    'messages.approved',
                ]
            ],
            [
                'group_name' => 'print',
                'permissions' => [
                    'print.all',
                    'print.show',
                ]
            ],
            [
                'group_name' => 'post',
                'permissions' => [
                    'post.all',
                    'post.create',
                    'post.show',
                    'post.update',
                    'post.delete',
                    'post.approved',
                ]
            ],
            [
                'group_name' => 'category',
                'permissions' => [
                    'category.all',
                    'category.create',
                    'category.show',
                    'category.update',
                    'category.delete',
                    'category.approved',
                ]
            ],
            [
                'group_name' => 'gallery',
                'permissions' => [
                    'gallery.all',
                    'gallery.create',
                    'gallery.show',
                    'gallery.update',
                    'gallery.delete',
                    'gallery.approved',
                ]
            ],


            [
                'group_name' => 'user',
                'permissions' => [
                    'user.all',
                    'user.create',
                    'user.show',
                    'user.update',
                    'user.delete',
                    'user.approved',
                ]
            ],
            [
                'group_name' => 'role',
                'permissions' => [
                    'role.all',
                    'role.create',
                    'role.show',
                    'role.update',
                    'role.delete',
                ]
            ],
            [
                'group_name' => 'settings',
                'permissions' => [
                    'settings.all',
                    'settings.show',
                    'settings.update',
                ]
            ],
        ];

        //Assign Permissions
        for ($i = 0; $i < count($permissions); $i++){
            $permissionGroup = $permissions[$i]['group_name'];

            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++){
                // Create Permission
                $permission = Permission::create(['name' => $permissions[$i]['permissions'][$j],'group_name' =>  $permissionGroup ]);
                $SuperAdminRole->givePermissionTo($permission);
                $permission->assignRole($SuperAdminRole);
            }
        }


    }
}
