<tbody>
    @forelse ($services as $service)
        <tr class="border-b">
            <td class="p-2">
                <img src="{{ asset('storage/' . $service->image) }}"
                     class="h-16 w-16 object-cover rounded">
            </td>
            <td class="p-2">{{ $service->title }}</td>
            <td class="p-2">
                <a href="{{ route('services.edit', $service->id) }}" class="text-blue-600">Edit</a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="3" class="text-center p-4 text-gray-500">
                No services found.
            </td>
        </tr>
    @endforelse
</tbody>

{{ $services->links() }}
