<div class="col-12 grid-margin stretch-card">
    <div class="card card-rounded">
        <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-start">
                <div>
                    <h4 class="card-title card-title-dash">Pending
                        Requests</h4>
                    <p class="card-subtitle card-subtitle-dash">You
                        have 50+ new requests</p>
                </div>
                <div>
                    <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i
                            class="mdi mdi-account-plus"></i>Add
                        new member</button>
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
                            <th>Customer</th>
                            <th>Company</th>
                            <th>Progress</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @unless (count($appontments) == 0) --}}

                            @foreach ($appointments as $appointment)
                                <tr>
                                    <td>
                                        <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" aria-checked="false"><i
                                                    class="input-helper"></i></label>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div>
                                                <h6>{{ $appointment->first_name }} {{ $appointment->last_name }}</h6>
                                                <p>{{ $appointment->email }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h6>Appointment Request</h6>
                                        <p>{{ $appointment->created_at->format('Y-m-d H:i') }}</p>
                                    </td>
                                    <td>
                                        <div>
                                            <p>{{ Str::limit($appointment->message, 50) }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="badge badge-opacity-warning">New</div>
                                    </td>
                                </tr>
                                @endforeach
                                {{-- @else
                                    <tr>
                                        <td colspan="5">No requests found.</td>
                                    </tr> --}}
                            {{-- @endunless --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

