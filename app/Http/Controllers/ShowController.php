<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeDocument;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show($id)
    {
       $employee = Employee::with('documents')->findOrFail($id);
        //  $employee = Employee::findOrFail($id);
        return view('admin.user_profile', compact('employee'));
    }
}
