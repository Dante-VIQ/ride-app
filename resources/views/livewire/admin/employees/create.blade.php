<div class="bg-white p-6 rounded-xl shadow-md space-y-6">

            <h2 class="text-2xl font-semibold text-gray-800">Create Employee</h2>

            {{-- Success Message --}}
            @if (session('success'))
                <div class="p-3 bg-green-100 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <form wire:submit.prevent="save" class="grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- Name --}}
                <div class="space-y-1">
                    <label class="text-gray-700 font-medium">Employee Name</label>
                    <input type="text" wire:model="employee_name"
                        class="w-full border-gray-300 rounded-lg focus:ring-teal-500" />
                    @error('employee_name')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Employee ID --}}
                <div class="space-y-1">
                    <label class="text-gray-700 font-medium">Employee ID</label>
                    <input type="text" wire:model="employee_id"
                        class="w-full border-gray-300 rounded-lg focus:ring-teal-500" />
                    @error('employee_id')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Phone --}}
                <div class="space-y-1">
                    <label class="text-gray-700 font-medium">Phone Number</label>
                    <input type="text" wire:model="phone_number"
                        class="w-full border-gray-300 rounded-lg focus:ring-teal-500" />
                    @error('phone_ number')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Address --}}
                <div class="space-y-1">
                    <label class="text-gray-700 font-medium">Address</label>
                    <input type="text" wire:model="address"
                        class="w-full border-gray-300 rounded-lg focus:ring-teal-500" />
                    @error('address')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Driver License --}}
                <div class="space-y-1">
                    <label class="text-gray-700 font-medium">Driver License Number</label>
                    <input type="text" wire:model="drivers_license_number"
                        class="w-full border-gray-300 rounded-lg focus:ring-teal-500" />
                    @error('drivers_license_number')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Profile Image --}}
                <div class="space-y-1">
                    <label class="text-gray-700 font-medium">Profile Image (Optional)</label>
                    <input type="file" accept="image/jpg, image/png, image/jpeg, image/webp"
                        wire:model="profile_image" class="w-full border-gray-300 rounded-lg">

                    @if ($profile_image)
                        <img src="{{ $profile_image->temporaryUrl() }}"
                            class="w-24 h-24 rounded-full mt-2 object-cover border shadow">
                    @endif
                    @error('profile_image')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Documents --}}
                <div class="col-span-2 space-y-1">
                    <label class="text-gray-700 font-medium">Employee Documents</label>
                    <input type="file" wire:model="documents" multiple class="w-full border-gray-300 rounded-lg">

                    @error('documents.*')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror

                    @if ($documents)
                        <ul class="mt-2 text-sm text-gray-600">
                            @foreach ($documents as $doc)
                                <li>{{ $doc->getClientOriginalName() }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                {{-- Submit --}}
                <div class="col-span-2">
                    <button type="submit" class="px-6 py-3 bg-teal-600 text-white rounded-lg shadow hover:bg-teal-700">
                        Save Employee
                    </button>
                </div>

            </form>

        </div>

