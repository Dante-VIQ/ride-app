<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Use withoutEvents to prevent unnecessary model events
        Role::withoutEvents(function () {
            Role::updateOrCreate(
                ['name' => 'admin'],
                ['description' => 'Administrator with full access']
            );
            
            Role::updateOrCreate(
                ['name' => 'user'],
                ['description' => 'Regular user']
            );
        });
    }
}