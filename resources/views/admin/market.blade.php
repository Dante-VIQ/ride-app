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
                                <th>Destination</th>
                                <th>Created by</th>
                                <th>Manage</th>
                                <th>Clicks</th>
                            </tr>
                        </thead>
                        <tbody>
                            @unless (empty($abouts) || count($abouts) == 0)
                                @foreach ($abouts as $about)
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-flat mt-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i
                                                        class="input-helper"></i></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex ">
                                                <img src="{{ asset('storage/' . $about->image) }}" alt="">
                                                <div>
                                                    <h6>{{ $about->description }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6">Go to Dashboard to view About us page</td>
                                </tr>
                            @endunless
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
