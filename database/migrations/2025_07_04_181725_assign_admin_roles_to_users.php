<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
     
         // Ensure admin role exists
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        
        // Hardcoded admin identifiers (emails or IDs)
        $adminUsers = [
            'damalide20@gmail.com',
            'admin2@example.com', 
            'admin3@example.com'
        ];
        
        // Assign admin role
        User::whereIn('email', $adminUsers)
            ->each(fn ($user) => $user->assignRole('admin'));
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       // Optional: Remove roles if migration is rolled back
        User::role('admin')->each(fn ($user) => $user->removeRole('admin'));
    }
};
