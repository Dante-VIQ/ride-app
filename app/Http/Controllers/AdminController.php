<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
     public function __invoke()
     {
         $this->middleware('auth');
        $this->middleware('role:admin');
     }
    public function index()
    {
        $users = User::all();
        $roles = Role::all();

        return view('home', compact('users', 'roles'));
    }
}
