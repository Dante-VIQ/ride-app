<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::all();
        return view('admin.head', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('images.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'image' => 'image|sometimes|nullable|max:10240',
            'photos' => 'image|sometimes|nullable|max:10240',
            'picture' => 'image|sometimes|nullable|max:10240',
        ]);

        if (!Auth::check()) {
            abort(403, 'You must be logged in to create a service.');
        }

        $image = new Image();

        // Update image if a new file is uploaded
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('headers', 'public_direct');
            $imagePath = 'uploads/' . $path;
        }
        if ($request->hasFile('photos')) {
            $path = $request->file('photos')->store('service', 'public_direct');
            $imagePath = 'uploads/' . $path;
        }
        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('other', 'public_direct');
            $imagePath = 'uploads/' . $path;
        }
        Image::create([
            'title' => $request->title,
            'image' => $imagePath ?? null,
            'photos' => $imagePath ?? null,
            'picture' => $imagePath ?? null,
            'user_id' => Auth::id(),
        ]);

        return redirect('/admin/head')->with('message', 'Image created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        return view('images.show', compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $image = Image::findOrFail($id);
        return view('images.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        $request->validate([
            'title' => 'nullable',
            'image' => 'image|sometimes|nullable|max:10240',
            'photos' => 'image|sometimes|nullable|max:10240',
            'picture' => 'image|sometimes|nullable|max:10240',
        ]);

        // $image = Image::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($image->image && file_exists(public_path($image->image))) {
                unlink(public_path($image->image));
            }
            $path = $request->file('image')->store('headers', 'public_direct');
            $imagePath = 'uploads/' . $path;
        }
        if ($request->hasFile('photos')) {
            if ($image->photos && file_exists(public_path($image->photos))) {
                unlink(public_path($image->photos));
            }
            $path = $request->file('photos')->store('service', 'public_direct');
            $imagePath = 'uploads/' . $path;
        }
        if ($request->hasFile('picture')) {
            if ($image->picture && file_exists(public_path($image->picture))) {
                unlink(public_path($image->picture));
            }
            $path = $request->file('picture')->store('other', 'public_direct');
            $imagePath = 'uploads/' . $path;
        }

        $image->title = $request->title;
        $image->update([
            'title' => $image->title,
            'image' => $imagePath ?? null,
            'photos' => $imagePath ?? null,
            'picture' => $imagePath ?? null,
        ]);

        return redirect('/admin/head')->with('message', 'Image created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        // $image = Image::findOrFail($id);
        $image->delete();

        return redirect('/admin/head')->with('message', 'Image created successfully!');
    }
}
