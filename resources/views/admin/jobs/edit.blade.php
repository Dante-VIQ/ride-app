<x-admin-layout>
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Career: {{ $career->title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.careers.index') }}">Careers</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header bg-warning text-white">
                    <i class="fas fa-edit me-2"></i>
                    Edit Career Posting
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.careers.update', $career) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Basic Information -->
                        <div class="mb-4">
                            <h5 class="mb-3">Basic Information</h5>
                            
                            <div class="mb-3">
                                <label for="title" class="form-label">Job Title *</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                       id="title" name="title" value="{{ old('title', $career->title) }}" required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="department" class="form-label">Department *</label>
                                    <input type="text" class="form-control @error('department') is-invalid @enderror" 
                                           id="department" name="department" 
                                           value="{{ old('department', $career->department) }}" required>
                                    @error('department')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="type" class="form-label">Employment Type *</label>
                                    <select class="form-select @error('type') is-invalid @enderror" 
                                            id="type" name="type" required>
                                        <option value="">Select Type</option>
                                        <option value="full-time" {{ (old('type', $career->type) == 'full-time') ? 'selected' : '' }}>Full Time</option>
                                        <option value="part-time" {{ (old('type', $career->type) == 'part-time') ? 'selected' : '' }}>Part Time</option>
                                        <option value="contract" {{ (old('type', $career->type) == 'contract') ? 'selected' : '' }}>Contract</option>
                                        <option value="temporary" {{ (old('type', $career->type) == 'temporary') ? 'selected' : '' }}>Temporary</option>
                                        <option value="internship" {{ (old('type', $career->type) == 'internship') ? 'selected' : '' }}>Internship</option>
                                    </select>
                                    @error('type')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="location" class="form-label">Work Location *</label>
                                    <select class="form-select @error('location') is-invalid @enderror" 
                                            id="location" name="location" required>
                                        <option value="">Select Location</option>
                                        <option value="onsite" {{ (old('location', $career->location) == 'onsite') ? 'selected' : '' }}>On-site</option>
                                        <option value="remote" {{ (old('location', $career->location) == 'remote') ? 'selected' : '' }}>Remote</option>
                                        <option value="hybrid" {{ (old('location', $career->location) == 'hybrid') ? 'selected' : '' }}>Hybrid</option>
                                    </select>
                                    @error('location')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="application_deadline" class="form-label">Application Deadline</label>
                                    <input type="date" class="form-control @error('application_deadline') is-invalid @enderror" 
                                           id="application_deadline" name="application_deadline" 
                                           value="{{ old('application_deadline', $career->application_deadline ? $career->application_deadline->format('Y-m-d') : '') }}">
                                    @error('application_deadline')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="text-muted">Leave empty for no deadline</small>
                                </div>
                            </div>
                        </div>

                        <!-- Salary Information -->
                        <div class="mb-4">
                            <h5 class="mb-3">Salary Information</h5>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="salary_min" class="form-label">Minimum Salary</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" class="form-control @error('salary_min') is-invalid @enderror" 
                                               id="salary_min" name="salary_min" 
                                               value="{{ old('salary_min', $career->salary_min) }}" 
                                               step="0.01" min="0">
                                        @error('salary_min')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="salary_max" class="form-label">Maximum Salary</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" class="form-control @error('salary_max') is-invalid @enderror" 
                                               id="salary_max" name="salary_max" 
                                               value="{{ old('salary_max', $career->salary_max) }}" 
                                               step="0.01" min="0">
                                        @error('salary_max')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="salary_period" class="form-label">Salary Period</label>
                                <select class="form-select @error('salary_period') is-invalid @enderror" 
                                        id="salary_period" name="salary_period">
                                    <option value="">Select Period</option>
                                    <option value="hourly" {{ (old('salary_period', $career->salary_period) == 'hourly') ? 'selected' : '' }}>Hourly</option>
                                    <option value="monthly" {{ (old('salary_period', $career->salary_period) == 'monthly') ? 'selected' : '' }}>Monthly</option>
                                    <option value="annually" {{ (old('salary_period', $career->salary_period) == 'annually') ? 'selected' : '' }}>Annually</option>
                                </select>
                                @error('salary_period')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Job Details -->
                        <div class="mb-4">
                            <h5 class="mb-3">Job Details</h5>
                            
                            <div class="mb-3">
                                <label for="description" class="form-label">Job Description *</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" 
                                          id="description" name="description" rows="6" required>{{ old('description', $career->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="requirements" class="form-label">Requirements & Qualifications *</label>
                                <textarea class="form-control @error('requirements') is-invalid @enderror" 
                                          id="requirements" name="requirements" rows="6" required>{{ old('requirements', $career->requirements) }}</textarea>
                                @error('requirements')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="mb-4">
                            <h5 class="mb-3">Status</h5>
                            
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" 
                                       id="is_active" name="is_active" value="1" 
                                       {{ old('is_active', $career->is_active) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active">
                                    Active (visible to applicants)
                                </label>
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.careers.index') }}" class="btn btn-secondary">
                                <i class="fas fa-times me-1"></i> Cancel
                            </a>
                            <div>
                                <a href="{{ route('admin.careers.show', $career) }}" 
                                   class="btn btn-info me-2" target="_blank">
                                    <i class="fas fa-eye me-1"></i> View Live
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-1"></i> Update Career
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Sidebar Stats -->
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-header bg-info text-white">
                    <i class="fas fa-chart-bar me-2"></i>
                    Career Statistics
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Views
                            <span class="badge bg-primary rounded-pill">{{ $career->views }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Applications
                            <span class="badge bg-success rounded-pill">{{ $career->applications_count }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Status
                            <span class="badge {{ $career->is_active ? 'bg-success' : 'bg-danger' }}">
                                {{ $career->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Created
                            <span class="text-muted">{{ $career->created_at->format('M d, Y') }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Last Updated
                            <span class="text-muted">{{ $career->updated_at->format('M d, Y') }}</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <i class="fas fa-bolt me-2"></i>
                    Quick Actions
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="{{ route('admin.careers.applications', ['career_id' => $career->id]) }}" 
                           class="btn btn-outline-primary">
                            <i class="fas fa-file-alt me-1"></i> View Applications
                        </a>
                        @if($career->is_active)
                        <form action="{{ route('admin.careers.update', $career) }}" method="POST" class="d-grid">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="is_active" value="0">
                            <button type="submit" class="btn btn-outline-warning">
                                <i class="fas fa-pause me-1"></i> Deactivate Career
                            </button>
                        </form>
                        @else
                        <form action="{{ route('admin.careers.update', $career) }}" method="POST" class="d-grid">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="is_active" value="1">
                            <button type="submit" class="btn btn-outline-success">
                                <i class="fas fa-play me-1"></i> Activate Career
                            </button>
                        </form>
                        @endif
                        <form action="{{ route('admin.careers.destroy', $career) }}" method="POST" 
                              class="d-grid" onsubmit="return confirm('Are you sure? This will delete ALL applications for this career.')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="fas fa-trash me-1"></i> Delete Career
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Preview -->
            <div class="card mb-4">
                <div class="card-header bg-secondary text-white">
                    <i class="fas fa-eye me-2"></i>
                    Live Preview
                </div>
                <div class="card-body">
                    <div class="border rounded p-3 bg-light">
                        <h6>{{ $career->title }}</h6>
                        <div class="d-flex flex-wrap gap-1 mb-2">
                            <span class="badge bg-info">{{ ucfirst(str_replace('-', ' ', $career->type)) }}</span>
                            <span class="badge bg-secondary">{{ ucfirst($career->location) }}</span>
                            <span class="badge bg-success">{{ $career->department }}</span>
                        </div>
                        <p class="small text-muted mb-2">{{ $career->salary_formatted }}</p>
                        @if($career->application_deadline)
                        <p class="small text-muted mb-0">
                            Apply by: {{ $career->application_deadline->format('M d, Y') }}
                        </p>
                        @endif
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('careers.show', $career) }}" target="_blank" 
                           class="btn btn-sm btn-primary w-100">
                            <i class="fas fa-external-link-alt me-1"></i> View on Website
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-admin-layout>