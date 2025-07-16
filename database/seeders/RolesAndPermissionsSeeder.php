<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
  public function run()
{
    DB::transaction(function () {
        // Get existing roles
        $adminRole = Role::where('name', 'admin')->firstOrFail();
        $userRole = Role::where('name', 'user')->firstOrFail();

        // Create permissions
        $permissions = [
            'manage-users' => 'Manage all users',
            'create-service' => 'Create new services',
            'edit-service' => 'Edit existing services',
            'create-about' => 'Create new abouts',
            'edit-about' => 'Edit existing abouts',
        ];

        foreach ($permissions as $name => $desc) {
            Permission::updateOrCreate(
                ['name' => $name],
                ['description' => $desc]
            );
        }

        // Get all permission IDs
        $allPermissionIds = Permission::pluck('id')->toArray();
        $userPermissionIds = Permission::whereIn('name', [
            'create-about',
            'edit-about',
            'create-service',
            'edit-service'
        ])->pluck('id')->toArray();

        // Use direct DB insert to avoid any relationship issues
        DB::table('role_permission')->where('role_id', $adminRole->id)->delete();
        DB::table('role_permission')->where('role_id', $userRole->id)->delete();
        
        foreach ($allPermissionIds as $permissionId) {
            DB::table('role_permission')->insert([
                'role_id' => $adminRole->id,
                'permission_id' => $permissionId
            ]);
        }
        
        foreach ($userPermissionIds as $permissionId) {
            DB::table('role_permission')->insert([
                'role_id' => $userRole->id,
                'permission_id' => $permissionId
            ]);
        }

        // Create admin users
        $this->createAdminUsers($adminRole);
    });
}

    protected function createAdminUsers(Role $adminRole)
    {
        $admins = [
            [
                'email' => env('SUPERADMIN_EMAIL'),
                'defaults' => [
                    'name' => 'Super Admin',
                    'password' => Hash::make(env('SUPERADMIN_PASSWORD')),
                    'role_id' => $adminRole->id,
                    'email_verified_at' => now(),
                ]
            ],
            [
                'email' => env('BACKUPADMIN_EMAIL'),
                'defaults' => [
                    'name' => 'Backup Admin',
                    'password' => Hash::make(env('BACKUPADMIN_PASSWORD')),
                    'role_id' => $adminRole->id,
                    'email_verified_at' => now(),
                ]
            ]
        ];

        foreach ($admins as $admin) {
            User::firstOrCreate(
                ['email' => $admin['email']],
                $admin['defaults']
            );
        }
    }
}