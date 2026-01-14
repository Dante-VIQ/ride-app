<x-admin-layout>

<div class="container-fluid px-4">
    <h1 class="mt-4">Booking Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Overview</li>
    </ol>

    <!-- Statistics Cards -->
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="fs-5">Total Bookings</div>
                            <div class="fs-2 fw-bold">{{ $stats['total'] }}</div>
                        </div>
                        <i class="fas fa-calendar-alt fa-2x"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ route('admin.bookings.index') }}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="fs-5">Pending</div>
                            <div class="fs-2 fw-bold">{{ $stats['pending'] }}</div>
                        </div>
                        <i class="fas fa-clock fa-2x"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ route('admin.bookings.index', ['status' => 'pending']) }}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="fs-5">Confirmed</div>
                            <div class="fs-2 fw-bold">{{ $stats['confirmed'] }}</div>
                        </div>
                        <i class="fas fa-check-circle fa-2x"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ route('admin.bookings.index', ['status' => 'confirmed']) }}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="fs-5">Today's Rides</div>
                            <div class="fs-2 fw-bold">{{ $stats['today'] }}</div>
                        </div>
                        <i class="fas fa-car fa-2x"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ route('admin.bookings.index', ['date_from' => date('Y-m-d')]) }}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts and Recent Bookings -->
    <div class="row">
        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Recent Bookings
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Reference</th>
                                    <th>Customer</th>
                                    <th>Service</th>
                                    <th>Pickup Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentBookings as $booking)
                                <tr>
                                    <td>
                                        <strong>{{ $booking->booking_reference }}</strong>
                                    </td>
                                    <td>
                                        {{ $booking->first_name }} {{ $booking->last_name }}<br>
                                        <small class="text-muted">{{ $booking->phone }}</small>
                                    </td>
                                    <td>
                                        <span class="badge bg-info">
                                            {{ ucfirst($booking->service_type) }}
                                        </span>
                                    </td>
                                    <td>
                                        {{ $booking->pickup_datetime->format('M d, Y H:i') }}
                                    </td>
                                    <td>
                                        <span class="badge bg-{{ $booking->status === 'confirmed' ? 'success' : ($booking->status === 'pending' ? 'warning' : ($booking->status === 'completed' ? 'secondary' : 'danger')) }}">
                                            {{ ucfirst($booking->status) }}
                                        </span>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.bookings.show', $booking) }}" class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-pie me-1"></i>
                    Bookings by Service Type
                </div>
                <div class="card-body">
                    <div class="list-group">
                        @foreach($serviceTypeStats as $stat)
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            {{ ucfirst($stat->service_type) }}
                            <span class="badge bg-primary rounded-pill">{{ $stat->count }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-pie me-1"></i>
                    Bookings by Status
                </div>
                <div class="card-body">
                    @foreach($statusStats as $stat)
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>{{ ucfirst($stat->status) }}</span>
                            <span>{{ $stat->count }}</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-{{ $stat->status === 'confirmed' ? 'success' : ($stat->status === 'pending' ? 'warning' : ($stat->status === 'completed' ? 'secondary' : 'danger')) }}"
                                 style="width: {{ ($stat->count / $stats['total']) * 100 }}%"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

</x-admin-layout>
