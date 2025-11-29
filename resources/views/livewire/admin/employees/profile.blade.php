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
            <img src="{{ $employee->profile_image ? asset('storage/' . $employee->profile_image) : 'https://via.placeholder.com/150' }}"
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
            <div class="border-t pt-6">

                <h3 class="text-lg font-semibold text-gray-700 mb-3">Documents</h3>

                <input type="file" wire:model="newDocuments" multiple>
                <button wire:click="uploadDocuments" class="mt-2 bg-teal-600 px-4 py-2 rounded text-white">
                    Upload Documents
                </button>

                <ul class="mt-4 space-y-2">
                    @foreach ($employee->documents ?? [] as $doc)

                        <li class="flex justify-between items-center border p-3 rounded-lg">
                            <span>{{ basename($doc->file_path) }}</span>

                            <div class="flex space-x-2">
                                <a href="{{ asset('storage/' . $doc->file_path) }}" target="_blank"
                                    class="px-3 py-1 bg-blue-500 text-white rounded">
                                    View
                                </a>

                                <button wire:click="deleteDocument({{ $doc->id }})"
                                    class="px-3 py-1 bg-red-600 text-white rounded">
                                    Delete
                                </button>
                            </div>
                        </li>
                    @endforeach
                </ul>

            </div>
            <!-- Flash Messages -->
            @if (session()->has('success'))
                <div class="mt-4 p-3 bg-green-100 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif
        </div>


</div>
