<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{


    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // Save to database
        Appointment::create($validated);

        // Send email to admin
        try {
            Mail::raw($validated['message'], function ($mail) use ($validated) {
                $mail->to(config('mail.admin_address', 'damalide20@gmail.com'))
                    ->subject('New Appointment Message from ' . $validated['first_name'] . ' ' . $validated['last_name'])
                    ->replyTo($validated['email']);
            });
        } catch (\Exception $e) {
            Log::error('Appointment message failed: ' . $e->getMessage());
            return back()->with('error', 'Failed to send message. Please try again later.');
        }

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
