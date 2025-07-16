<div>
    <div class="col-12 grid-margin stretch-card">
        <div class="card card-rounded">
            <div class="card-body">
                <div class="d-sm-flex justify-content-between align-items-start">
                    <div>
                        <h4 class="card-title card-title-dash">About us</h4>
                        <p class="card-subtitle card-subtitle-dash">You can manage your About Us content here</p>
                    </div>
                    <div class="relative p-5 mx-auto" x-data="{ show: false }" x-cloak>
                        <x-button x-on:click.prevent="show = true" class="px-4 py-2 text-light rounded bg-primary"><i
                                class="fa fa-add text-primary"></i>
                            Create About Us content</x-button>

                        <div class="mx-auto z-9 top-1/3 left-1/3" x-show="show"
                            x-on:click.outside.prevent="show = false">
                            @include('about.create')
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
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @foreach ($user->roles as $role)
                                            <span class="badge bg-primary">{{ $role->name }}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.users.assign-role', $user) }}" method="POST">
                                            @csrf
                                            <select name="role" class="form-select">
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn btn-sm btn-primary">Assign</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
