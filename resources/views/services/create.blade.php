<x-admin-layout>
    <div class="max-w-2xl mx-auto py-10">
        <x-card class="p-10">
            <header class="text-center text-black">
                <h2 class="text-2xl font-bold uppercase mb-1 text-slate-700">Add a Service</h2>
                {{-- <p class="mb-4 font-semibold">Post a gig</p> --}}
            </header>

            <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-6 text-black font-semibold">
                    <label for="title" class="inline-block text-lg mb-2">Title</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                        value="{{ old('title') }}" />
                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6 text-black font-semibold">
                    <label for="image" class="inline-block text-lg mb-2">Image</label>
                    <input accept="image/png, image/jpeg, image/jfif, image/jpg" type="file" name="image"
                        class="border border-gray-200 rounded p-2 w-full" />
                    @error('image')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6 text-black font-semibold">
                    <button type="submit" class="bg-laravel rounded py-2 px-4 text-black font-semibold">Create</button>
                </div>
            </form>
        </x-card>
    </div>
</x-admin-layout>
