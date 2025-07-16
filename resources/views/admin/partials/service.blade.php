@props(['culture'])
<div>
    {{-- @if (auth()->check() && auth()->user()->isMaster())
        <div class="relative p-5 mx-auto" x-data="{ show: false }" x-cloak>
            <x-button x-on:click.prevent="show = true" class="px-4 py-2 text-light rounded bg-primary"><i
                    class="fa fa-add text-primary"></i>
                Add Destination</x-button>

            <div class="mx-auto z-9 top-1/3 left-1/3" x-show="show" x-on:click.outside.prevent="show = false">
                @include('livewire.includes.doctor-create')
            </div>
        </div>
    @endif --}}
    <div class="col-12 grid-margin stretch-card">
        <div class="card card-rounded">
            <div class="card-body">
                <div class="d-sm-flex justify-content-between align-items-start">
                    <div>
                        <h4 class="card-title card-title-dash">Services</h4>
                        <p class="card-subtitle card-subtitle-dash">You can manage your Services here</p>
                    </div>
                    <div x-data="{ show: false }" x-cloak>
                        <button x-on:click.prevent="show = true" class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i
                                class="mdi mdi-account-plus"></i>Add
                            New Service</button>
                    </div>
                    <div class="mx-auto z-9 top-1/3 left-1/3" x-show="show" x-on:click.outside.prevent="show = service
                        @include('service.create')
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
                        @unless (count($services) == 0)
                            @foreach ($services as $service)
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
                                            <div class="d-flex ">
                                                <img src="{{ asset('storage/' . $service->image) }}" alt="">
                                                <div>
                                                    <h6>{{ $service->name }}</h6>
                                                
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6>{{ $culture->user->name }}</h6>
                                            <p>{{ $culture->user->id }}</p>
                                        </td>
                                      
                                    </tr>
                                </tbody>
                            @endforeach

                        @endunless
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
