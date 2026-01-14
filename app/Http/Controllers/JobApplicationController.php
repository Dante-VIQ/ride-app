<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Career;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\JobApplication;
use App\Models\CareerApplication;
use Illuminate\Support\Facades\Log;
use App\Mail\JobApplicationReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class JobApplicationController extends Controller
{
    public function index()
    {
        $careers = Career::where('is_active', true)
            ->where(function ($query) {
                $query->whereNull('application_deadline')->orWhere('application_deadline', '>=', now());
            })
            ->orderBy('created_at', 'desc')
            ->get();

        return view('jobs.index', compact('careers'));
    }

    public function show(Career $career)
    {
        // Increment views
        $career->increment('views');

        return view('jobs.apply', compact('career'));
    }

    public function apply(Career $career)
    {
        if (!$career->is_open) {
            return redirect()->route('jobs.index')->with('error', 'This job position is no longer accepting applications.');
        }

        return view('jobs.apply', compact('career'));
    }

    public function store(Request $request, Career $career)
    {
        if (!$career->is_open) {
            return back()->with('error', 'This job position is no longer accepting applications.');
        }

        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'state' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
            'postal_code' => 'nullable|string|max:20',
            'cover_letter' => 'nullable|string|max:2000',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:5120', // 5MB max
            'additional_documents.*' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:5120',
            'linkedin_url' => 'nullable|url|max:255',
            'portfolio_url' => 'nullable|url|max:255',
            'hear_about_us' => 'nullable|string|max:255',
        ]);

        try {
            // Upload resume
            $resumePath = $request->file('resume')->store('resumes', 'public');

            // Upload additional documents
            $additionalDocs = [];
            if ($request->hasFile('additional_documents')) {
                foreach ($request->file('additional_documents') as $file) {
                    $additionalDocs[] = $file->store('job-documents', 'public');
                }
            }

            // Create application
            $application = CareerApplication::create([
                'career_id' => $career->id,
                'application_number' => 'APP' . strtoupper(Str::random(8)),
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country,
                'postal_code' => $request->postal_code,
                'cover_letter' => $request->cover_letter,
                'resume_path' => $resumePath,
                'additional_documents' => !empty($additionalDocs) ? $additionalDocs : null,
                'linkedin_url' => $request->linkedin_url,
                'portfolio_url' => $request->portfolio_url,
                'hear_about_us' => $request->hear_about_us,
                'status' => 'pending',
            ]);

            // Increment job applications count
            $career->increment('applications_count');

            try {
                // Send confirmation to customer
                if (!empty($career->email)) {
                    Mail::to($career->email)->queue(new JobApplicationReceived($application));
                    Log::info('Customer confirmation email queued', ['email' => $career->email]);
                }

                // Send notification to admin
                $masterEmails = env('MASTER_EMAILS', '');
                $masterRecipients = array_filter(array_map('trim', explode(',', $masterEmails)));

                if (empty($masterRecipients)) {
                    $masterRecipients = ['africa@vumbiventures.com', 'vumbiventures.com'];
                }

                Mail::to($masterRecipients)->queue(new \App\Mail\NewJobApplicationNotification($application));
            } catch (\Exception $e) {
                Log::error('Email queueing failed', [
                    'error' => $e->getMessage(),
                    'career_id' => $career->id,
                ]);
                // Don't throw - emails failing shouldn't fail the booking
            }

            return redirect()->route('jobs.application.thankyou', $application)->with('success', 'Your application has been submitted successfully!');
        } catch (\Exception $e) {
            Log::error('Job application failed: ' . $e->getMessage());

            // Clean up uploaded files if application creation failed
            if (isset($resumePath) && Storage::disk('public')->exists($resumePath)) {
                Storage::disk('public')->delete($resumePath);
            }

            if (isset($additionalDocs)) {
                foreach ($additionalDocs as $doc) {
                    if (Storage::disk('public')->exists($doc)) {
                        Storage::disk('public')->delete($doc);
                    }
                }
            }

            return back()->with('error', 'There was an error submitting your application. Please try again.')->withInput();
        }
    }

    public function thankyou(CareerApplication $application)
    {
        return view('jobs.thankyou', compact('application'));
    }

    public function downloadResume(CareerApplication $application)
    {
        if (!Storage::disk('public')->exists($application->resume_path)) {
            abort(404);
        }

        return Storage::disk('public')->download($application->resume_path, 'resume_' . $application->full_name . '.' . pathinfo($application->resume_path, PATHINFO_EXTENSION));
    }

    public function downloadDocument(CareerApplication $application, $index)
    {
        $documents = $application->additional_documents ?? [];

        if (!isset($documents[$index]) || !Storage::disk('public')->exists($documents[$index])) {
            abort(404);
        }

        $filename = 'document_' . $application->full_name . '_' . ($index + 1) . '.' . pathinfo($documents[$index], PATHINFO_EXTENSION);

        return Storage::disk('public')->download($documents[$index], $filename);
    }
}
