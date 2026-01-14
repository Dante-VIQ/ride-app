<x-admin-layout>

<div class="container-fluid px-4">
    <h1 class="mt-4">Bookings</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('analysis') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Bookings</li>
    </ol>

    <!-- Filters Card -->
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-filter me-1"></i>
            Filters
        </div>
        <div class="card-body">
            <form method="GET" action="{{ route('admin.bookings.index') }}" class="row g-3">
                <div class="col-md-3">
                    <input type="text" name="search" class="form-control" placeholder="Search..." value="{{ request('search') }}">
                </div>
                <div class="col-md-2">
                    <select name="status" class="form-select">
                        <option value="all" {{ request('status') == 'all' ? 'selected' : '' }}>All Status</option>
                        <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="confirmed" {{ request('status') == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                        <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                        <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select name="service_type" class="form-select">
                        <option value="all" {{ request('service_type') == 'all' ? 'selected' : '' }}>All Services</option>
                        @foreach($serviceTypes as $type)
                        <option value="{{ $type }}" {{ request('service_type') == $type ? 'selected' : '' }}>
                            {{ ucfirst($type) }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <input type="date" name="date_from" class="form-control" value="{{ request('date_from') }}" placeholder="From Date">
                </div>
                <div class="col-md-2">
                    <input type="date" name="date_to" class="form-control" value="{{ request('date_to') }}" placeholder="To Date">
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary w-100">Filter</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Status Badges -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex flex-wrap gap-2">
                <a href="{{ route('admin.bookings.index') }}" class="badge bg-primary text-decoration-none p-2">
                    All <span class="badge bg-light text-dark">{{ $statusCounts['all'] }}</span>
                </a>
                <a href="{{ route('admin.bookings.index', ['status' => 'pending']) }}" class="badge bg-warning text-decoration-none p-2">
                    Pending <span class="badge bg-light text-dark">{{ $statusCounts['pending'] }}</span>
                </a>
                <a href="{{ route('admin.bookings.index', ['status' => 'confirmed']) }}" class="badge bg-success text-decoration-none p-2">
                    Confirmed <span class="badge bg-light text-dark">{{ $statusCounts['confirmed'] }}</span>
                </a>
                <a href="{{ route('admin.bookings.index', ['status' => 'completed']) }}" class="badge bg-secondary text-decoration-none p-2">
                    Completed <span class="badge bg-light text-dark">{{ $statusCounts['completed'] }}</span>
                </a>
                <a href="{{ route('admin.bookings.index', ['status' => 'cancelled']) }}" class="badge bg-danger text-decoration-none p-2">
                    Cancelled <span class="badge bg-light text-dark">{{ $statusCounts['cancelled'] }}</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Bookings Table -->
    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <i class="fas fa-table me-1"></i>
                    Bookings List
                </div>
                <div>
                    <a href="{{ route('admin.bookings.export', request()->all()) }}" class="btn btn-success btn-sm">
                        <i class="fas fa-download me-1"></i> Export CSV
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Reference</th>
                            <th>Customer</th>
                            <th>Contact</th>
                            <th>Service</th>
                            <th>Pickup Details</th>
                            <th>Passengers</th>
                            <th>Wheelchair</th>
                            <th>Cost</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($bookings as $booking)
                        <tr>
                            <td>
                                <strong>{{ $booking->booking_reference }}</strong>
                            </td>
                            <td>
                                {{ $booking->first_name }} {{ $booking->last_name }}
                            </td>
                            <td>
                                <div>{{ $booking->phone }}</div>
                                @if($booking->email)
                                <small class="text-muted">{{ $booking->email }}</small>
                                @endif
                            </td>
                            <td>
                                <span class="badge bg-info">
                                    {{ ucfirst($booking->service_type) }}
                                </span>
                                <br>
                                <small>{{ ucfirst($booking->trip_type) }}</small>
                            </td>
                            <td>
                                <div><strong>{{ $booking->pickup_datetime->format('M d, Y H:i') }}</strong></div>
                                <small class="text-muted">{{ Str::limit($booking->pickup_address, 30) }}</small>
                            </td>
                            <td class="text-center">
                                {{ $booking->passengers }}
                            </td>
                            <td class="text-center">
                                @if($booking->wheelchair_required)
                                <span class="badge bg-warning">Yes</span>
                                @else
                                <span class="badge bg-secondary">No</span>
                                @endif
                            </td>
                            <td>
                                ${{ number_format($booking->estimated_cost, 2) }}
                                @if($booking->actual_cost)
                                <br>
                                <small>Actual: ${{ number_format($booking->actual_cost, 2) }}</small>
                                @endif
                            </td>
                            <td>
                                <span class="badge bg-{{ $booking->status === 'confirmed' ? 'success' : ($booking->status === 'pending' ? 'warning' : ($booking->status === 'completed' ? 'secondary' : 'danger')) }}">
                                    {{ ucfirst($booking->status) }}
                                </span>
                            </td>
                            <td>
                                {{ $booking->created_at->format('M d, Y') }}
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="{{ route('admin.bookings.show', $booking) }}" class="btn btn-outline-primary" title="View">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.bookings.edit', $booking) }}" class="btn btn-outline-warning" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.bookings.destroy', $booking) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="11" class="text-center py-4">
                                <div class="text-muted">
                                    <i class="fas fa-inbox fa-3x mb-3"></i>
                                    <p>No bookings found</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $bookings->withQueryString()->links() }}
            </div>
        </div>
    </div>
</div>

</x-admin-layout>