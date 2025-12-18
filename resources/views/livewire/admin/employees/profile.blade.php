<div class="max-w-5xl w-full bg-white p-6 rounded-xl shadow space-y-6">

    {{-- Success message --}}
    @if (session('success'))
        <div class="p-3 bg-green-100 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex space-x-6">

        {{-- Profile Image --}}
        <div>
            <h2 class="text-4xl font-semibold mb-4 uppercase">{{ $employee->employee_name }}</h2>
            <img src="{{ $employee->profile_image ? asset($employee->profile_image) : 'https://via.placeholder.com/150' }}"
                class="w-32 h-32 rounded-full object-cover border shadow">

            <div class="mt-3">
                <input type="file" wire:model="newProfileImage">

                <button wire:click="updateProfileImage" class="mt-2 px-4 py-2 bg-teal-600 text-white rounded-lg">
                    Update Image
                </button>
            </div>
        </div>

        {{-- Info Fields --}}
        <div class="flex-1 space-y-4">

            @foreach (['employee_name' => 'Name', 'employee_id' => 'Employee ID', 'phone_number' => 'Phone', 'address' => 'Address', 'drivers_license_number' => 'Driver License'] as $field => $label)
                <div>
                    <label class="text-gray-600 font-medium">{{ $label }}</label>

                    @if ($editingField === $field)
                        <input type="text" wire:model.defer="{{ $field }}" class="border rounded p-2 w-full">
                        <button wire:click="updateField"
                            class="mt-1 bg-teal-600 px-3 py-1 text-white rounded">Save</button>
                    @else
                        <div class="flex justify-between">
                            <span>{{ $this->$field ?? 'Not provided' }}</span>
                            <button wire:click="enableEdit('{{ $field }}')" class="text-teal-600">Edit</button>
                        </div>
                    @endif
                </div>
            @endforeach

        </div>
    </div>

    <div>
        <!-- Your other profile content -->

        <!-- Documents Section -->
        {{-- Documents Section --}}
<div class="max-w-5xl mx-auto p-6">

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-semibold mb-4">{{ $employee->employee_name }}'s Documents</h2>

        <!-- Upload Form -->
        <div class="mb-6">
            <input type="file" wire:model="newDocuments" multiple class="mb-2">
            <button wire:click="uploadDocuments"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Upload Documents
            </button>
            @error('newDocuments.*') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

            @if($newDocuments)
                <div class="mt-2 text-sm text-gray-600">
                    Selected files:
                    @foreach($newDocuments as $doc)
                        {{ $doc->getClientOriginalName() }},
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Documents List -->
        <div class="space-y-3">

            @foreach($documents as $document)
                <div class="flex justify-between items-center border border-gray-200 rounded p-3">
                    <div>
                        <span class="font-medium text-gray-700">{{ $document->original_name }}</span>
                        <span class="text-sm text-gray-500 ml-2">
                            ({{ number_format($document->file_size / 1024, 1) }} KB)
                        </span>
                    </div>
                    <div class="space-x-2">
                        <a href="{{ asset($document->file_path) }}"
                           target="_blank"
                           class="bg-green-500 text-white py-1 px-3 rounded text-sm">
                            View
                        </a>
                        <button wire:click="deleteDocument({{ $document->id }})"
                                onclick="return confirm('Are you sure you want to delete this document?')"
                                class="bg-red-500 text-white py-1 px-3 rounded text-sm">
                            Delete
                        </button>
                    </div>
                </div>
            @endforeach
            @if($documents->count() === 0)

                <p class="text-gray-500 text-center py-4">No documents found.</p>
            @endif
        </div>
    </div>
</div>

        <!-- Delete Employee Button -->
        <div class="border-t pt-6 mt-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-3">Danger Zone</h3>
            <button wire:click="deleteEmployee"
                wire:confirm="Are you sure you want to delete this employee? This action cannot be undone."
                class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                Delete Employee
            </button>
        </div>

        <!-- Flash Messages -->
        @if (session()->has('success'))
            <div class="mt-4 p-3 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif
    </div>

</div>
