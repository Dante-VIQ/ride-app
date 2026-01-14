<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Career;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\JobApplication;
use App\Models\CareerApplication;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class AdminJobController extends Controller
{
    public function index()
    {
        $careers = Career::withCount('applications')->latest()->paginate(10);
        return view('admin.jobs.index', compact('careers'));
    }

    public function create()
    {
        return view('admin.jobs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'requirements' => 'required|string',
            'type' => 'required|in:full-time,part-time,contract,temporary,internship',
            'location' => 'required|in:onsite,remote,hybrid',
            'department' => 'required|string|max:100',
            'salary_min' => 'nullable|numeric|min:0',
            'salary_max' => 'nullable|numeric|min:0|gte:salary_min',
            'salary_period' => 'nullable|in:hourly,monthly,annually',
            'application_deadline' => 'nullable|date|after:today',
            'is_active' => 'boolean',
        ]);

        $career = Career::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title) . '-' . Str::random(6),
            'description' => $request->description,
            'requirements' => $request->requirements,
            'type' => $request->type,
            'location' => $request->location,
            'department' => $request->department,
            'salary_min' => $request->salary_min,
            'salary_max' => $request->salary_max,
            'salary_period' => $request->salary_period,
            'application_deadline' => $request->application_deadline,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.jobs.index')
            ->with('success', 'Job created successfully.');
    }

    public function edit(Career $career)
    {
        return view('admin.jobs.edit', compact('career'));
    }

    public function update(Request $request, Career $career)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'requirements' => 'required|string',
            'type' => 'required|in:full-time,part-time,contract,temporary,internship',
            'location' => 'required|in:onsite,remote,hybrid',
            'department' => 'required|string|max:100',
            'salary_min' => 'nullable|numeric|min:0',
            'salary_max' => 'nullable|numeric|min:0|gte:salary_min',
            'salary_period' => 'nullable|in:hourly,monthly,annually',
            'application_deadline' => 'nullable|date',
            'is_active' => 'boolean',
        ]);

        $career->update([
            'title' => $request->title,
            'description' => $request->description,
            'requirements' => $request->requirements,
            'type' => $request->type,
            'location' => $request->location,
            'department' => $request->department,
            'salary_min' => $request->salary_min,
            'salary_max' => $request->salary_max,
            'salary_period' => $request->salary_period,
            'application_deadline' => $request->application_deadline,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.jobs.index')
            ->with('success', 'Job updated successfully.');
    }

    public function destroy(Career $career)
    {
        $career->delete();
        return redirect()->route('admin.jobs.index')
            ->with('success', 'Job deleted successfully.');
    }

    // Applications Management
    public function applications()
    {
        $applications = CareerApplication::with('career')
            ->latest()
            ->paginate(20);
        
        return view('admin.jobs.applications', compact('applications'));
    }

    public function showApplication(CareerApplication $application)
    {
        return view('admin.jobs.application-show', compact('application'));
    }

    public function updateApplication(Request $request, CareerApplication $application)
    {
        $request->validate([
            'status' => 'required|in:pending,reviewing,shortlisted,rejected,hired',
            'rating' => 'nullable|integer|min:1|max:5',
            'admin_notes' => 'nullable|string|max:1000',
        ]);

        $application->update([
            'status' => $request->status,
            'rating' => $request->rating,
            'admin_notes' => $request->admin_notes,
        ]);

        return redirect()->route('admin.jobs.applications.show', $application)
            ->with('success', 'Application updated successfully.');
    }

    public function downloadApplicationResume(CareerApplication $application)
    {
        if (!Storage::disk('public')->exists($application->resume_path)) {
            abort(404);
        }

        return Storage::disk('public')->download($application->resume_path, 
            'resume_' . $application->full_name . '.' . pathinfo($application->resume_path, PATHINFO_EXTENSION));
    }

    public function exportApplications(Request $request)
    {
        $query = JobApplication::with('job');
        
        if ($request->has('job_id')) {
            $query->where('job_id', $request->job_id);
        }
        
        if ($request->has('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }
        
        $applications = $query->get();
        
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="job_applications_' . date('Y-m-d_H-i') . '.csv"',
        ];
        
        $callback = function() use ($applications) {
            $file = fopen('php://output', 'w');
            fputs($file, chr(0xEF) . chr(0xBB) . chr(0xBF)); // UTF-8 BOM
            
            fputcsv($file, [
                'Application Number',
                'Job Title',
                'Applicant Name',
                'Email',
                'Phone',
                'Applied Date',
                'Status',
                'Rating',
                'Cover Letter Length',
                'Has Additional Documents',
            ]);
            
            foreach ($applications as $app) {
                fputcsv($file, [
                    $app->application_number,
                    $app->job->title,
                    $app->full_name,
                    $app->email,
                    $app->phone,
                    $app->created_at->format('Y-m-d H:i'),
                    ucfirst($app->status),
                    $app->rating ? str_repeat('★', $app->rating) : 'N/A',
                    strlen($app->cover_letter ?? ''),
                    !empty($app->additional_documents) ? 'Yes' : 'No',
                ]);
            }
            
            fclose($file);
        };
        
        return response()->stream($callback, 200, $headers);
    }
}