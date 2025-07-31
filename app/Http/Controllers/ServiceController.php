<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::paginate(6);
        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'image' =>'image|sometimes|nullable|max:10240'

        ]);


        if (!Auth::check()) {
            abort(403, 'You must be logged in to create a service.');
        }

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images', 'public');
        }



        $validated['user_id'] = Auth::id();

        Service::create($validated);

        return redirect('/home')->with('message', 'Service created successfully!');
    }

        /**
     * Display all services for the main services page.
     */
    public function all()
    {
        $services = Service::all();
        return view('services.main', compact('services'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        $services = Service::latest()->get();
        return view('services.main');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        // if (! Gate::allows('update-service', $service)) {
        //     abort(403);
        // }
        // Make sure logged in user is owner
        if ($service->user_id != Auth::guard()->id()) {
            abort(403, 'Unauthorized Action');
        }
       return view('services.edit', ['service' => $service]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //   if (! Gate::allows('update-service', $service)) {
        //     abort(403);
        // }
        // Make sure logged in user is owner
        if ($service->user_id != Auth::guard()->id()) {
            abort(403, 'Unauthorized Action');
        }
        $validated = $request->validate([
            'title' => 'required',
            'image' =>'image|sometimes|nullable|max:10240',


        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images', 'public');
        }


           $service->update($validated);

        return redirect('/home')->with('message', 'Service updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //  if (! Gate::allows('destroy-service', $service)) {
        //     abort(403);
        // }
         return view('sevice.delete', ['service' => $service]);
        // Make sure logged in user is owner
    if ($service->user_id != Auth::guard()->id()) {
        abort(403, 'Unauthorized Action');
    }

    if ($service->image && Storage::disk('public')->exists($service->image)) {
        Storage::disk('public')->delete($service->image);
    }
    $service->delete();
    return redirect('/dashboard')->with('message', 'Service deleted successfully');
    }
}
