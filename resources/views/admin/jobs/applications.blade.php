<x-admin-layout>
<div class="container-fluid px-4">
    <h1 class="mt-4">Job Applications</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('analysis') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Job Applications</li>
    </ol>

    <!-- Filters -->
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-filter me-1"></i>
            Filters
        </div>
        <div class="card-body">
            <form method="GET" class="row g-3">
                <div class="col-md-3">
                    <input type="text" name="search" class="form-control" placeholder="Search..." value="{{ request('search') }}">
                </div>
                <div class="col-md-2">
                    <select name="status" class="form-select">
                        <option value="all" {{ request('status') == 'all' ? 'selected' : '' }}>All Status</option>
                        <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="reviewing" {{ request('status') == 'reviewing' ? 'selected' : '' }}>Reviewing</option>
                        <option value="shortlisted" {{ request('status') == 'shortlisted' ? 'selected' : '' }}>Shortlisted</option>
                        <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                        <option value="hired" {{ request('status') == 'hired' ? 'selected' : '' }}>Hired</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select name="career_id" class="form-select">
                        <option value="">All Careers</option>
                        @foreach(\App\Models\Career::all() as $career)
                        <option value="{{ $career->id }}" {{ request('career_id') == $career->id ? 'selected' : '' }}>
                            {{ $career->title }}
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

    <!-- Applications Table -->
    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <i class="fas fa-table me-1"></i>
                    Job Applications
                </div>
                <div>
                    <a href="{{ route('admin.jobs.applications.export', request()->all()) }}" class="btn btn-success btn-sm">
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
                            <th>App ID</th>
                            <th>Applicant</th>
                            <th>Job Position</th>
                            <th>Applied Date</th>
                            <th>Status</th>
                            <th>Rating</th>
                            <th>Resume</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($applications as $application)
                        <tr>
                            <td>
                                <strong>{{ $application->application_number }}</strong>
                            </td>
                            <td>
                                <div>{{ $application->full_name }}</div>
                                <small class="text-muted">{{ $application->email }}</small><br>
                                <small class="text-muted">{{ $application->phone }}</small>
                            </td>
                            <td>
                                <span class="badge bg-info">{{ $application->career->title }}</span>
                            </td>
                            <td>{{ $application->created_at->format('M d, Y') }}</td>
                            <td>
                                <span class="badge {{ $application->status_badge_class }}">
                                    {{ ucfirst($application->status) }}
                                </span>
                            </td>
                            <td>
                                @if($application->rating)
                                <div class="text-warning">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="fas fa-star{{ $i <= $application->rating ? '' : '-o' }}"></i>
                                    @endfor
                                </div>
                                @else
                                <span class="text-muted">Not rated</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.jobs.applications.download-resume', $application) }}" 
                                   class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-download"></i> Resume
                                </a>
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="{{ route('admin.jobs.applications.show', $application) }}" 
                                       class="btn btn-outline-primary" title="View">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <form action="{{ route('admin.jobs.applications.destroy', $application) }}" 
                                          method="POST" class="d-inline" 
                                          onsubmit="return confirm('Are you sure?')">
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
                            <td colspan="8" class="text-center py-4">No applications found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            {{ $applications->withQueryString()->links() }}
        </div>
    </div>
</div>
</x-admin-layout>