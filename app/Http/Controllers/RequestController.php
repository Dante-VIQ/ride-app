<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class RequestController extends Controller
{

public function index() {
    $requests = \App\Models\Appointment::latest()->get();
    return view('admin.requests', compact('requests'));
}
}
