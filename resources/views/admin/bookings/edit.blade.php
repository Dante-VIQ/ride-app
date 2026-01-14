<x-admin-layout>


<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Booking</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.bookings.index') }}">Bookings</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.bookings.show', $booking) }}">{{ $booking->booking_reference }}</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
    
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header bg-warning text-white">
                    <i class="fas fa-edit me-2"></i>
                    Edit Booking Details
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.bookings.update', $booking) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="status" class="form-label">Status *</label>
                                <select name="status" id="status" class="form-select" required>
                                    <option value="pending" {{ $booking->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="confirmed" {{ $booking->status === 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                    <option value="completed" {{ $booking->status === 'completed' ? 'selected' : '' }}>Completed</option>
                                    <option value="cancelled" {{ $booking->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                </select>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="actual_cost" class="form-label">Actual Cost</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="number" name="actual_cost" id="actual_cost" class="form-control" 
                                           step="0.01" min="0" value="{{ $booking->actual_cost }}">
                                </div>
                            </div>
                        </div>
                        
                        <hr>
                        
                        <h5 class="mb-3">Driver Information (Optional)</h5>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="driver_name" class="form-label">Driver Name</label>
                                <input type="text" name="driver_name" id="driver_name" class="form-control" 
                                       value="{{ $booking->driver_name }}">
                            </div>
                            
                            <div class="col-md-4 mb-3">
                                <label for="driver_phone" class="form-label">Driver Phone</label>
                                <input type="text" name="driver_phone" id="driver_phone" class="form-control" 
                                       value="{{ $booking->driver_phone }}">
                            </div>
                            
                            <div class="col-md-4 mb-3">
                                <label for="vehicle_number" class="form-label">Vehicle Number</label>
                                <input type="text" name="vehicle_number" id="vehicle_number" class="form-control" 
                                       value="{{ $booking->vehicle_number }}">
                            </div>
                        </div>
                        
                        <hr>
                        
                        <div class="mb-3">
                            <label for="notes" class="form-label">Admin Notes</label>
                            <textarea name="notes" id="notes" class="form-control" rows="4">{{ $booking->notes }}</textarea>
                            <small class="text-muted">Internal notes only, not visible to customer</small>
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.bookings.show', $booking) }}" class="btn btn-secondary">
                                <i class="fas fa-times me-1"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-1"></i> Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <!-- Booking Summary Card -->
            <div class="card mb-4">
                <div class="card-header bg-info text-white">
                    <i class="fas fa-info-circle me-2"></i>
                    Booking Summary
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Reference:</span>
                            <strong>{{ $booking->booking_reference }}</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Customer:</span>
                            <strong>{{ $booking->first_name }} {{ $booking->last_name }}</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Service:</span>
                            <span class="badge bg-info">{{ ucfirst($booking->service_type) }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Pickup:</span>
                            <span>{{ $booking->pickup_datetime->format('M d, Y H:i') }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Current Status:</span>
                            <span class="badge bg-{{ $booking->status === 'confirmed' ? 'success' : ($booking->status === 'pending' ? 'warning' : ($booking->status === 'completed' ? 'secondary' : 'danger')) }}">
                                {{ ucfirst($booking->status) }}
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Estimated Cost:</span>
                            <strong>${{ number_format($booking->estimated_cost, 2) }}</strong>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Quick Status Change Card -->
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <i class="fas fa-bolt me-2"></i>
                    Quick Status Update
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.bookings.update', $booking) }}" method="POST" class="d-grid gap-2">
                        @csrf
                        @method('PUT')
                        
                        <input type="hidden" name="status" value="confirmed">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-check me-1"></i> Confirm Booking
                        </button>
                    </form>
                    
                    <form action="{{ route('admin.bookings.update', $booking) }}" method="POST" class="d-grid gap-2 mt-2">
                        @csrf
                        @method('PUT')
                        
                        <input type="hidden" name="status" value="completed">
                        <button type="submit" class="btn btn-secondary">
                            <i class="fas fa-flag-checkered me-1"></i> Mark as Completed
                        </button>
                    </form>
                    
                    <form action="{{ route('admin.bookings.update', $booking) }}" method="POST" class="d-grid gap-2 mt-2">
                        @csrf
                        @method('PUT')
                        
                        <input type="hidden" name="status" value="cancelled">
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-times me-1"></i> Cancel Booking
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-admin-layout>