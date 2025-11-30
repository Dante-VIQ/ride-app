<x-admin-layout>
    <div class="max-w-5xl flex flex-col p-6">

        <h1 class="text-2xl font-bold mb-4">About Posts</h1>

        <a href="{{ route('services.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded mb-4 inline-block">+ Add
            Service</a>

        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="p-2">Image</th>
                    <th class="p-2">Title</th>
                    <th class="p-2">Actions</th>
                </tr>
            </thead>
            <livewire:admin-view />
        </table>

    </div>
</x-admin-layout>
