<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => ADMIN]);

        $allPermissions = [
            [
                'module' => 'Dashboard',
                'permissions' => [
                    'dashboard.view',
                ]
            ],
            [
                'module' => 'Role',
                'permissions' => [
                    'role.view',
                    'role.create',
                    'role.update',
                    'role.delete',
                ]
            ],
            [
                'module' => 'Agent',
                'permissions' => [
                    'agent.view',
                    'agent.create',
                    'agent.update',
                    'agent.delete',
                ]
            ],
            [
                'module' => 'Student',
                'permissions' => [
                    'student.view',
                    'student.create',
                    'student.update',
                    'student.delete',
                ]
            ]
        ];

        foreach ($allPermissions as $permissions) {
            $module = $permissions['module'];
            foreach ($permissions['permissions'] as $permission) {
                $storePermission = Permission::create([
                    'name' => $permission,
                    'module' => $module,
                ]);
                $adminRole->givePermissionTo($storePermission);
                $storePermission->assignRole($adminRole);
            }
        }
        $admin = User::where('type', ADMIN)->first();
        $admin->assignRole($adminRole);
    }
}
