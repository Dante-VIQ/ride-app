@props(['abouts' => []])
<div>
    <div class="col-12 grid-margin stretch-card">
        <div class="card card-rounded">
            <div class="card-body">
                <div class="d-sm-flex justify-content-between align-items-start">
                    <div>
                        <h4 class="card-title card-title-dash">About us</h4>
                        <p class="card-subtitle card-subtitle-dash">You can manage your About Us content here</p>
                    </div>
                    <div class="p-5 mx-auto" x-data="{ show: false }" x-cloak>
                        <button x-on:click.prevent="show = true" class="px-4 py-2 text-light rounded bg-primary">
                            <i class="fa fa-add text-primary"></i>
                            Create About Us content
                        </button>

                        <!-- Modal -->
                        <div x-show="show" x-transition
                            class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
                            x-on:click.self="show = false">
                            <div class="relative">
                                @include('about.create')
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
                                <th>About</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @unless (count($abouts) == 0) --}}
                            @foreach ($this->abouts as $about)
                                <tr class="justify-evenly">
                                    <td>
                                        <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" aria-checked="false"><i
                                                    class="input-helper"></i></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex items-start">
                                            <img src="{{ asset('storage/' . $about->image) }}" alt="Image"
                                                class="w-12 h-12 object-cover rounded me-3">

                                        </div>
                                    </td>

                                    <td class="py-3 px-4 h-1/3">
                                        <div class="d-flex">
                                            <div class="max-w-xs">
                                                <p class="line-clamp-2 text-sm text-gray-800">
                                                    {{ $about->description }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3 px-4">
                                        <div x-data="{ show: false }"
                                            class="d-sm-flex justify-content-between align-items-start" x-cloak>
                                            <button x-on:click.prevent="show = true"
                                                class="btn-edit flex items-center text-blue-600 hover:text-blue-800">
                                                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                    </path>
                                                </svg>
                                                Edit
                                            </button>

                                            <div x-show="show" x-transition
                                                class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
                                                x-on:click.self="show = false">
                                                <div class="relative">
                                                    @include('about.edit')
                                                    <button
                                                        class="absolute top-2 right-2 text-white bg-red-500 rounded-full px-2 py-1"
                                                        x-on:click="show = false">&#10005;</button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    {{-- <td>
                                     @include('about.delete', ['about' => $about])
                                    </td> --}}
                                </tr>
                            @endforeach
                            {{-- @else
                                <tr>
                                    <td colspan="6">Go to Dashboard to view About us page</td>
                                </tr> --}}
                            {{-- @endunless --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
