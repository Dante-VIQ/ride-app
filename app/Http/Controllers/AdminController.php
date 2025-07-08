<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function makeAdmin($userId)
{
    $user = User::findOrFail($userId);
    $user->assignRole('admin'); // Assign admin role
    
    return redirect()->back()->with('success', 'User promoted to admin!');

}
}