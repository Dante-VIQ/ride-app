<x-admin-layout>
    <div class="max-w-4xl w-full flex flex-col p-6 justify-center mx-auto">

        <h1 class="text-2xl font-bold mb-4">Our Services</h1>

        <a href="{{ route('services.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded mb-4 inline-block">+ Add
            Service</a>


            <livewire:admin-view />

    </div>
</x-admin-layout>
