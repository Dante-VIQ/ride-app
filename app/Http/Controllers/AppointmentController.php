<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use App\Mail\AppointmentRequestMail;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::latest()->paginate(10);

        return view('admin.partials.requests', compact('appointments'));
    }
    public function create()
    {
        return view('components.partials.appointment');
    }
    public function store(Request $request)
    {
        // ✅ 1. Validate form input
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        try {
            // ✅ 2. Save to database
            $appointment = Appointment::create($validated);

            // ✅ 3. Queue email to MASTER_EMAILS from .env (comma-separated)
            $masterEmails = env('MASTER_EMAILS', '');
            $masterRecipients = array_filter(array_map('trim', explode(',', $masterEmails)));

            // Fallback to a sensible default if MASTER_EMAILS not set
            if (empty($masterRecipients)) {
                $masterRecipients = [config('mail.admin_address_1', 'admin@rideaidellc.com')];
            }

            Mail::to($masterRecipients)->queue(new AppointmentRequestMail($appointment));

            return back()->with('success', 'Your appointment request has been submitted successfully!');
        } catch (\Exception $e) {
            Log::error('Failed to process appointment request: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong. Please try again later.');
        }
    }
}
