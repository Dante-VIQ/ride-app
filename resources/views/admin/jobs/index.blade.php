<x-admin-layout>
<div class="container-fluid px-4">
    <h1 class="mt-4">Career Postings</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('analysis') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Careers</li>
    </ol>

    <!-- Success Message -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <!-- Create Career Button -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h5 class="mb-0">Manage Career Postings</h5>
            <p class="text-muted mb-0">Create, edit, and manage career listings</p>
        </div>
        <a href="{{ route('admin.jobs.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i> Create New Career
        </a>
    </div>

    <!-- Careers Table -->
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Active Career Postings
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Job Title</th>
                            <th>Department</th>
                            <th>Type</th>
                            <th>Location</th>
                            <th>Salary</th>
                            <th>Applications</th>
                            <th>Status</th>
                            <th>Deadline</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($careers as $career)
                        <tr>
                            <td>
                                <strong>{{ $career->title }}</strong><br>
                                <small class="text-muted">Posted: {{ $career->created_at->format('M d, Y') }}</small>
                            </td>
                            <td>{{ $career->department }}</td>
                            <td>
                                <span class="badge bg-info">{{ ucfirst(str_replace('-', ' ', $career->type)) }}</span>
                            </td>
                            <td>
                                <span class="badge bg-secondary">{{ ucfirst($career->location) }}</span>
                            </td>
                            <td>
                                @if($career->salary_formatted)
                                {{ $career->salary_formatted }}
                                @else
                                <span class="text-muted">Negotiable</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-primary rounded-pill me-2">{{ $career->applications_count }}</span>
                                    <a href="{{ route('admin.jobs.applications', ['career_id' => $career->id]) }}" 
                                       class="text-primary" title="View applications">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                @if($career->is_active)
                                <span class="badge bg-success">Active</span>
                                @else
                                <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                @if($career->application_deadline)
                                {{ $career->application_deadline->format('M d, Y') }}
                                @if($career->application_deadline->isPast())
                                <br><small class="text-danger">Expired</small>
                                @endif
                                @else
                                <span class="text-muted">No deadline</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="{{ route('jobs.show', $career) }}" target="_blank" 
                                       class="btn btn-outline-info" title="View on site">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    <a href="{{ route('admin.jobs.edit', $career) }}" 
                                       class="btn btn-outline-warning" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.jobs.destroy', $career) }}" 
                                          method="POST" class="d-inline" 
                                          onsubmit="return confirm('Are you sure? This will also delete all applications for this career.')">
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
                            <td colspan="9" class="text-center py-4">
                                <div class="text-muted">
                                    <i class="fas fa-briefcase fa-3x mb-3"></i>
                                    <p>No career postings found</p>
                                    <a href="{{ route('admin.careers.create') }}" class="btn btn-primary mt-2">
                                        <i class="fas fa-plus me-1"></i> Create Your First Career
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $careers->links() }}
            </div>
        </div>
    </div>

    <!-- Statistics -->
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="fs-5">Total Careers</div>
                            <div class="fs-2 fw-bold">{{ $careers->total() }}</div>
                        </div>
                        <i class="fas fa-briefcase fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="fs-5">Active Careers</div>
                            <div class="fs-2 fw-bold">{{ \App\Models\Career::where('is_active', true)->count() }}</div>
                        </div>
                        <i class="fas fa-check-circle fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="fs-5">Total Applications</div>
                            <div class="fs-2 fw-bold">{{ \App\Models\CareerApplication::count() }}</div>
                        </div>
                        <i class="fas fa-file-alt fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="fs-5">Pending Applications</div>
                            <div class="fs-2 fw-bold">{{ \App\Models\CareerApplication::where('status', 'pending')->count() }}</div>
                        </div>
                        <i class="fas fa-clock fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-admin-layout>