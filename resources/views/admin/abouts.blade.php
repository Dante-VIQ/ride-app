<x-admin-layout>
    <div class="max-w-4xl w-full flex flex-col p-6">

        <h1 class="text-2xl font-bold mb-4">About Posts</h1>

        <a href="{{ route('abouts.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded mb-4 inline-block">+ Add
            About</a>

        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="p-2">Image</th>
                    <th class="p-2">Title</th>
                    <th class="p-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($abouts as $about)
                    <tr class="border-b">
                        <td class="p-2">
                            <img src="{{ asset('storage/' . $about->image) }}" class="h-16 w-16 object-cover rounded">
                        </td>
                        <td class="p-2">{{ $about->description }}</td>
                        <td class="p-2">
                            <a href="{{ route('abouts.edit', $about) }}" class="text-blue-600">Edit</a> |
                            <form action="{{ route('abouts.destroy', $about) }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button class="text-red-600" onclick="return confirm('Delete blog?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $abouts->links() }}
        </div>
    </div>
</x-admin-layout>
