<div class="max-w-4xl w-full flex flex-col p-6 justify-center mx-auto">

    <h1 class="text-2xl font-bold mb-4">Header Images</h1>

    <a href="{{ route('images.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded mb-4 inline-block">+ Add
        Image</a>


    <div>
        @if ($images && $images->count())
            <table class="w-full border-collapse">
                <thead>
                    <tr>
                        <th class="p-2">ID</th>
                        <th class="p-2">Title</th>
                        <th class="p-2">Image</th>
                        <th class="p-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($images as $image)
                        <tr>
                            <td class="p-3">{{ $image->id }}</td>
                            <td class="p-3">{{ $image->title }}</td>
                            <td class="p-3">

                                <img src="{{ $image->image ? asset($image->image) : asset('images/default.png') }}"
                                    alt="{{ $image->title }}" width="50">

                            </td>
                            <td class="p-2">
                                <a href="{{ route('images.edit', $image->id) }}" class="text-blue-600">Edit</a>

                                <form action="{{ route('images.destroy', $image) }}" method="POST" class="mt-4">
                                    @csrf
                                    @method('DELETE')
                                    <button class="px-3 py-2 bg-red-600 text-white rounded-lg">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- {{ $services->links() }} --}}
        @else
            <p class="text-gray-500">No services found.</p>
        @endif
    </div>


</div>
