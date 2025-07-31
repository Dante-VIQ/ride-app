<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::latest()->get();
        return view('admin.market', ['abouts' => $abouts]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'description' => 'required',
            'image' => 'image|sometimes|nullable|max:10240',
            'photo' =>'image|sometimes|nullable|max:10240'

        ]);

        if (!Auth::check()) {
            abort(403, 'You must be logged in to create a service.');
        }

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images', 'public');
        }

         if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('photos', 'public');
        }

        $validated['user_id'] = Auth::id();

        About::create($validated);

        return redirect('/home')->with('message', 'About created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        $abouts = About::latest()->get();
        return view('about.main', ['abouts' => $abouts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        //   if (! Gate::allows('update-about', $about)) {
        //     abort(403);
        // }
        return view('about.edit', ['about' => $about]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {

        //   if (! Gate::allows('update-about', $about)) {
        //     abort(403);
        // }
        // Make sure logged in user is owner
        if ($about->user_id != Auth::guard()->id()) {
            abort(403, 'Unauthorized Action');
        }
        $validated = $request->validate([
            'description' => 'required',
            'image' => 'image|sometimes|nullable|max:10240',
              'photo' =>'image|sometimes|nullable|max:10240'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images', 'public');
        }

           if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('photos', 'public');
        }
        $about->update($validated);

        return redirect('/home')->with('message', 'About updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {

        //   if (! Gate::allows('destroy-about', $about)) {
        //     abort(403);
        // }
        return view('about.delete', ['about' => $about]);
        // Make sure logged in user is owner
        if ($about->user_id != Auth::guard()->id()) {
            abort(403, 'Unauthorized Action');
        }

        if ($about->image && Storage::disk('public')->exists($about->image)) {
            Storage::disk('public')->delete($about->image);
        }
        if ($about->photo && Storage::disk('public')->exists($about->photo)) {
            Storage::disk('public')->delete($about->photo);
        }

         // Delete the about record
        $about->delete();
        return redirect('/home')->with('message', 'About deleted successfully');
    }
}
