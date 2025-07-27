@props(['services'])
<div>
    <div class="col-12 grid-margin stretch-card w-full">
        <div class="card card-rounded">
            <div class="card-body">
                <div class="d-sm-flex justify-content-between align-items-start">
                    <div>
                        <h4 class="card-title card-title-dash">Our Services</h4>
                        <p class="card-subtitle card-subtitle-dash">You can manage your services here</p>
                    </div>
                    <div class="relative p-5 mx-auto" x-data="{ show: false }" x-cloak>
                        <button x-on:click.prevent="show = true" class="px-4 py-2 text-light rounded bg-primary">
                            <i class="fa fa-add text-primary text-lg"></i>
                            Create service
                        </button>

                        <!-- Modal -->
                        <div x-show="show" x-transition
                            class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
                            x-on:click.self="show = false">
                            <div class="relative">
                                @include('services.create')
                                <button class="absolute top-2 right-2 text-white bg-red-500 rounded-full px-2 py-1"
                                    x-on:click="show = false">&#10005;</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive  mt-1">
                    <table class="table select-table">
                        <thead>
                            <tr>
                                <th>
                                    <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"
                                                id="check-all"><i class="input-helper"></i></label>
                                    </div>
                                </th>
                                <th>Photo</th>
                                <th>Service Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @unless (count($services) == 0) --}}
                            @foreach ($this->services as $service)
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i
                                                class="input-helper"></i></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <img class="img-fluid rounded-circle p-2 mx-auto mb-4"
                                            src="{{ $service->image ? asset('storage/' . $service->image) : asset('/images') }}"
                                            style="width: 80px; height: 80px;">

                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex">
                                        <div class="max-w-xs">
                                            <h6 class="line-clamp-2 text-sm text-gray-800">
                                                {{ $service->title }}
                                            </h6>
                                        </div>
                                    </div>
                                </td>

                                <td class="py-3 px-4">
                                    <div x-data="{ show: false }" x-cloak class="flex justify-start space-x-2">
                                        <button x-on:click.prevent="show = true"
                                            class="btn-edit flex items-center text-blue-600 hover:text-blue-800">
                                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                </path>
                                            </svg>
                                            Edit
                                        </button>

                                        <div x-show="show" x-transition
                            class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
                            x-on:click.self="show = false">
                            <div class="relative">
                                @include('services.edit')
                                <button class="absolute top-2 right-2 text-white bg-red-500 rounded-full px-2 py-1"
                                    x-on:click="show = false">&#10005;</button>
                            </div>
                        </div>

                                    </div>
                                </td>

                                <td>
                                    <button wire:click="delete({{ $service->id }})"
                                        class="btn-delete flex items-center text-red-600 hover:text-red-800"
                                        onclick="return confirm('Are you sure you want to delete this about section?')">
                                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                            </path>
                                        </svg>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                        {{-- @else
                            <tr>
                                <td colspan="6">Got to Dashboard to view Services</td>
                            </tr> --}}
                        {{-- @endunless --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
