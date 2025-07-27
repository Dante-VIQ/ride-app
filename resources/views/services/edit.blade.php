<x-card class="p-10 align-items-start">
    <header class="text-center text-black">
        <h2 class="text-2xl font-bold uppercase mb-1 text-slate-700">Update Service</h2>
    </header>

    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-6 text-black font-semibold">
            <label for="title" class="inline-block text-lg mb-2">Title</label>
            <div class="flex space-x-4">

                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                    value="{{ old('title', $service->title) }}" />
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mb-6 text-black font-semibold">
            <label class="inline-block text-lg mb-2">Current Image</label>
            @if ($service->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $service->image) }}" alt="Current service image"
                        class="w-32 h-32 object-cover rounded-lg">
                </div>
            @else
                <p class="text-gray-500 text-sm mt-1">No image uploaded</p>
            @endif
        </div>

        <div class="mb-6 text-black font-semibold">
            <label for="image" class="inline-block text-lg mb-2">Update Image</label>
            <div class="flex space-x-4">
                <input accept="image/png, image/jpeg, image/jfif, image/jpg" type="file" name="image"
                    class="border border-gray-200 rounded p-2 w-full" />
                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mb-6 text-black font-semibold">
            <button type="submit"
                class="bg-laravel rounded py-2 px-4 text-black font-semibold hover:bg-black hover:text-white transition duration-300">
                Update Service
            </button>
        </div>
    </form>
</x-card>
