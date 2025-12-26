<div>
    @if ($services && $services->count())
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
                @foreach ($services as $service)
                    <tr>
                        <td class="p-3">{{ $service->id }}</td>
                        <td class="p-3">{{ $service->title }}</td>
                        <td class="p-3">

                            <img src="{{ $service->image ? asset($service->image) : asset('images/default.png') }}"
                                alt="{{ $service->title }}" width="50">

                        </td>
                        <td class="p-2">
                            <a href="{{ route('services.edit', $service->id) }}" class="text-blue-600">Edit</a>

                            <form action="{{ route('services.destroy', $service) }}" method="POST" class="mt-4">
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

        {{ $services->links() }}
    @else
        <p class="text-gray-500">No services found.</p>
    @endif
</div>
