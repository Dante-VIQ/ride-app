<?php

namespace Database\Seeders;

use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\About;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\RolesAndPermissionsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        $this->call([
            RoleSeeder::class,
            RolesAndPermissionsSeeder::class,
        ]);
    // Create roles first
//     $adminRole = Role::create(['name' => 'admin']);
//     $userRole = Role::create(['name' => 'user']);
//    \App\Models\User::factory(10)->create();
        // Service::factory()->create();

        //  About::factory()->create();
    }
}
