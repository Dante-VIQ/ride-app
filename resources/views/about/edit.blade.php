<x-card class="p-10">
    <header class="text-center text-black">
        <h2 class="text-2xl font-bold uppercase mb-1 text-slate-700">Modify About Us page</h2>
    </header>

    <form action="{{ route('abouts.update', $about->id) }}" method="POST" enctype="multipart/form-data"
        class="space-y-6 items-center justify-center">
        {{-- Include CSRF token and method field for PUT request --}}
        @csrf
        @method('PUT')
        <div class="mb-6 text-black font-semibold">
            <label for="description" class="inline-block text-lg mb-2">Description</label>
            <div class="flex space-x-4">
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="6">{{ old('description', $about->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mb-6 text-black font-semibold">
            <label class="inline-block text-lg mb-2">Current Images</label>
            <div class="flex space-x-4">
                @if ($about->image)
                    <div class="flex flex-col items-center">
                        <span class="mb-1">Main Image:</span>
                        <img src="{{ asset('storage/' . $about->image) }}" alt="Current main image"
                            class="w-32 h-32 object-cover">
                    </div>
                @endif
                @if ($about->photo)
                    <div class="flex flex-col items-center">
                        <span class="mb-1">Profile Photo:</span>
                        <img src="{{ asset('storage/' . $about->photo) }}" alt="Current profile photo"
                            class="w-32 h-32 object-cover">
                    </div>
                @endif
            </div>
        </div>

        <div class="mb-6 text-black font-semibold">
            <label for="image" class="inline-block text-lg mb-2">Update Main Image</label>
             <div class="flex space-x-4">
            <input accept="image/png, image/jpeg, image/jfif, image/jpg" type="file" name="image"
                class="border border-gray-200 rounded p-2 w-full" />
            @error('image')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
             </div>
        </div>

        <div class="mb-6 text-black font-semibold">
            <label for="photo" class="inline-block text-lg mb-2">Update Profile Photo</label>
             <div class="flex space-x-4">
            <input accept="image/png, image/jpeg, image/jfif, image/jpg" type="file" name="photo"
                class="border border-gray-200 rounded p-2 w-full" />
            @error('photo')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
             </div>
        </div>

        <div class="mb-6 text-black font-semibold">
            <button type="submit"
                class="bg-laravel rounded py-2 px-4 text-black font-semibold hover:bg-black hover:text-white transition duration-300">Update</button>
        </div>
    </form>
</x-card>
