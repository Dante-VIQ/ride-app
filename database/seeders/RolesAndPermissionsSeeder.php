<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Reset cached permissions
    app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

    // Create permissions
    Permission::firstOrCreate(['name' => 'edit_posts']);
    Permission::firstOrCreate(['name' => 'delete_posts']);

    // Create roles
    $admin = Role::firstOrCreate(['name' => 'admin']);
    $admin->givePermissionTo(['edit_posts', 'delete_posts']);

    $editor = Role::firstOrCreate(['name' => 'editor']);
    $editor->givePermissionTo('edit_posts');
    }
}
