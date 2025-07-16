<x-card class="p-10">
    <header class="text-center text-black">
        <h2 class="text-2xl font-bold uppercase mb-1 text-slate-700">Modify About Us page</h2>
        {{-- <p class="mb-4 font-semibold">Post a gig</p> --}}
    </header>

    <form action="{{ route('abouts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-6 text-black font-semibold">
            <label for="description" class="inline-block text-lg mb-2">Description</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="description" value="{{ old('description') }}" />
            @error('description')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6 text-black font-semibold">
            <label for="image" class="inline-block text-lg mb-2">Image</label>
            <input accept="image/png, image/jpeg, image/jfif, image/jpg" type="file" name="image" class="border border-gray-200 rounded p-2 w-full" />
            @error('image')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6 text-black font-semibold">
            <label for="photo" class="inline-block text-lg mb-2">Photo</label>
            <input accept="image/png, image/jpeg, image/jfif, image/jpg" type="file" name="photo" class="border border-gray-200 rounded p-2 w-full" />
            @error('photo')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6 text-black font-semibold">
            <button type="submit" class="bg-laravel rounded py-2 px-4 text-black font-semibold">Create</button>
        </div>
    </form>
</x-card>
