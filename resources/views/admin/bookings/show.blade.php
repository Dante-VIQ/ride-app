<x-admin-layout>

<div class="container-fluid px-4">
    <h1 class="mt-4">Booking Details</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('analysis') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.bookings.index') }}">Bookings</a></li>
        <li class="breadcrumb-item active">{{ $booking->booking_reference }}</li>
    </ol>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <div class="row">
        <div class="col-lg-8">
            <!-- Booking Details Card -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fas fa-info-circle me-2"></i>
                            Booking Information
                        </div>
                        <div>
                            <span class="badge bg-{{ $booking->status === 'confirmed' ? 'success' : ($booking->status === 'pending' ? 'warning' : ($booking->status === 'completed' ? 'secondary' : 'danger')) }} fs-6">
                                {{ ucfirst($booking->status) }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <h6 class="text-muted">Booking Reference</h6>
                            <h4>{{ $booking->booking_reference }}</h4>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h6 class="text-muted">Booking Date</h6>
                            <p>{{ $booking->created_at->format('F j, Y \a\t g:i A') }}</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <h6 class="text-muted">Customer Information</h6>
                            <p>
                                <strong>{{ $booking->first_name }} {{ $booking->last_name }}</strong><br>
                                <i class="fas fa-phone me-1"></i> {{ $booking->phone }}<br>
                                @if($booking->email)
                                <i class="fas fa-envelope me-1"></i> {{ $booking->email }}<br>
                                @endif
                                <i class="fas fa-comment me-1"></i> Prefers contact via {{ $booking->preferred_contact }}
                            </p>

                            @if($booking->insurance_provider)
                            <h6 class="text-muted mt-3">Insurance Information</h6>
                            <p>
                                {{ $booking->insurance_provider }}<br>
                                ID: {{ $booking->insurance_id }}
                            </p>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <h6 class="text-muted">Service Details</h6>
                            <p>
                                <span class="badge bg-info">{{ ucfirst($booking->service_type) }}</span>
                                <span class="badge bg-secondary">{{ ucfirst($booking->trip_type) }}</span><br>
                                <strong>Passengers:</strong> {{ $booking->passengers }}<br>
                                <strong>Wheelchair:</strong> {{ $booking->wheelchair_required ? 'Yes' : 'No' }}
                            </p>

                            <h6 class="text-muted mt-3">Cost Information</h6>
                            <p>
                                <strong>Estimated:</strong> ${{ number_format($booking->estimated_cost, 2) }}<br>
                                @if($booking->actual_cost)
                                <strong>Actual:</strong> ${{ number_format($booking->actual_cost, 2) }}
                                @endif
                            </p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <h6 class="text-muted">Pickup Details</h6>
                            <p>
                                <strong>Date & Time:</strong><br>
                                {{ $booking->pickup_datetime->format('F j, Y \a\t g:i A') }}
                            </p>
                            <p>
                                <strong>Address:</strong><br>
                                {{ $booking->pickup_address }}
                            </p>
                        </div>

                        <div class="col-md-6 mb-3">
                            <h6 class="text-muted">Drop-off Details</h6>
                            <p>
                                <strong>Address:</strong><br>
                                {{ $booking->dropoff_address }}
                            </p>

                            @if($booking->return_datetime)
                            <p>
                                <strong>Return Pickup:</strong><br>
                                {{ $booking->return_datetime->format('F j, Y \a\t g:i A') }}
                            </p>
                            @endif
                        </div>
                    </div>

                    @if($booking->special_requirements || $booking->additional_notes)
                    <hr>
                    <div class="row">
                        @if($booking->special_requirements)
                        <div class="col-md-6 mb-3">
                            <h6 class="text-muted">Special Requirements</h6>
                            <p>{{ $booking->special_requirements }}</p>
                        </div>
                        @endif

                        @if($booking->additional_notes)
                        <div class="col-md-6 mb-3">
                            <h6 class="text-muted">Additional Notes</h6>
                            <p>{{ $booking->additional_notes }}</p>
                        </div>
                        @endif
                    </div>
                    @endif

                    @if($booking->driver_name)
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <h6 class="text-muted">Driver Information</h6>
                            <p>
                                <strong>Name:</strong> {{ $booking->driver_name }}<br>
                                <strong>Phone:</strong> {{ $booking->driver_phone }}<br>
                                <strong>Vehicle:</strong> {{ $booking->vehicle_number }}
                            </p>
                        </div>

                        @if($booking->notes)
                        <div class="col-md-6 mb-3">
                            <h6 class="text-muted">Admin Notes</h6>
                            <p>{{ $booking->notes }}</p>
                        </div>
                        @endif
                    </div>
                    @endif
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.bookings.edit', $booking) }}" class="btn btn-warning">
                            <i class="fas fa-edit me-1"></i> Edit Booking
                        </a>
                        <div>
                            <a href="{{ route('admin.bookings.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-1"></i> Back to List
                            </a>
                            <form action="{{ route('admin.bookings.destroy', $booking) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this booking?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash me-1"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <!-- Quick Actions Card -->
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <i class="fas fa-bolt me-2"></i>
                    Quick Actions
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        @if($booking->status === 'pending')
                        <form action="{{ route('admin.bookings.update', $booking) }}" method="POST" class="d-grid">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="confirmed">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-check me-1"></i> Confirm Booking
                            </button>
                        </form>
                        @endif

                        @if($booking->status === 'confirmed')
                        <form action="{{ route('admin.bookings.update', $booking) }}" method="POST" class="d-grid">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="completed">
                            <button type="submit" class="btn btn-secondary">
                                <i class="fas fa-flag-checkered me-1"></i> Mark as Completed
                            </button>
                        </form>
                        @endif

                        @if(in_array($booking->status, ['pending', 'confirmed']))
                        <form action="{{ route('admin.bookings.update', $booking) }}" method="POST" class="d-grid">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="cancelled">
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-times me-1"></i> Cancel Booking
                            </button>
                        </form>
                        @endif

                        @if($booking->email)
                        <a href="mailto:{{ $booking->email }}?subject=Booking {{ $booking->booking_reference }}" class="btn btn-outline-primary">
                            <i class="fas fa-envelope me-1"></i> Email Customer
                        </a>
                        @endif

                        <a href="tel:{{ $booking->phone }}" class="btn btn-outline-secondary">
                            <i class="fas fa-phone me-1"></i> Call Customer
                        </a>
                    </div>
                </div>
            </div>

            <!-- Status History Card -->
            <div class="card mb-4">
                <div class="card-header bg-info text-white">
                    <i class="fas fa-history me-2"></i>
                    Status History
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Created
                            <span class="text-muted">{{ $booking->created_at->format('M d, Y H:i') }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Last Updated
                            <span class="text-muted">{{ $booking->updated_at->format('M d, Y H:i') }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pickup Date
                            <span class="text-muted">{{ $booking->pickup_datetime->format('M d, Y H:i') }}</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Print/Export Card -->
            <div class="card mb-4">
                <div class="card-header bg-dark text-white">
                    <i class="fas fa-print me-2"></i>
                    Export & Print
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <button onclick="window.print()" class="btn btn-outline-dark">
                            <i class="fas fa-print me-1"></i> Print Booking
                        </button>
                        <a href="{{ route('admin.bookings.export', ['search' => $booking->booking_reference]) }}" class="btn btn-outline-dark">
                            <i class="fas fa-file-export me-1"></i> Export as CSV
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Print Styles -->
<style media="print">
    .breadcrumb, .card-header, .btn, .col-lg-4, footer {
        display: none !important;
    }
    .card {
        border: none !important;
        box-shadow: none !important;
    }
    .card-body {
        padding: 0 !important;
    }
</style>
</x-admin-layout>