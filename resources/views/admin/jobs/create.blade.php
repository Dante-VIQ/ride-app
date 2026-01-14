<x-admin-layout>
<div class="container-fluid px-4">
    <h1 class="mt-4">Create New Career</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('analysis') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.jobs.index') }}">Careers</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>

    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-plus me-2"></i>
                    Create New Career Posting
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.jobs.store') }}" method="POST">
                        @csrf

                        <!-- Basic Information -->
                        <div class="mb-4">
                            <h5 class="mb-3">Basic Information</h5>
                            
                            <div class="mb-3">
                                <label for="title" class="form-label">Job Title *</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                       id="title" name="title" value="{{ old('title') }}" required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="department" class="form-label">Department *</label>
                                    <input type="text" class="form-control @error('department') is-invalid @enderror" 
                                           id="department" name="department" value="{{ old('department') }}" required>
                                    @error('department')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="type" class="form-label">Employment Type *</label>
                                    <select class="form-select @error('type') is-invalid @enderror" 
                                            id="type" name="type" required>
                                        <option value="">Select Type</option>
                                        <option value="full-time" {{ old('type') == 'full-time' ? 'selected' : '' }}>Full Time</option>
                                        <option value="part-time" {{ old('type') == 'part-time' ? 'selected' : '' }}>Part Time</option>
                                        <option value="contract" {{ old('type') == 'contract' ? 'selected' : '' }}>Contract</option>
                                        <option value="temporary" {{ old('type') == 'temporary' ? 'selected' : '' }}>Temporary</option>
                                        <option value="internship" {{ old('type') == 'internship' ? 'selected' : '' }}>Internship</option>
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
                                        <option value="onsite" {{ old('location') == 'onsite' ? 'selected' : '' }}>On-site</option>
                                        <option value="remote" {{ old('location') == 'remote' ? 'selected' : '' }}>Remote</option>
                                        <option value="hybrid" {{ old('location') == 'hybrid' ? 'selected' : '' }}>Hybrid</option>
                                    </select>
                                    @error('location')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="application_deadline" class="form-label">Application Deadline</label>
                                    <input type="date" class="form-control @error('application_deadline') is-invalid @enderror" 
                                           id="application_deadline" name="application_deadline" 
                                           value="{{ old('application_deadline') }}"
                                           min="{{ date('Y-m-d') }}">
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
                                               id="salary_min" name="salary_min" value="{{ old('salary_min') }}" 
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
                                               id="salary_max" name="salary_max" value="{{ old('salary_max') }}" 
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
                                    <option value="hourly" {{ old('salary_period') == 'hourly' ? 'selected' : '' }}>Hourly</option>
                                    <option value="monthly" {{ old('salary_period') == 'monthly' ? 'selected' : '' }}>Monthly</option>
                                    <option value="annually" {{ old('salary_period') == 'annually' ? 'selected' : '' }}>Annually</option>
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
                                          id="description" name="description" rows="6" required>{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="text-muted">Describe the role, responsibilities, and what makes this position exciting.</small>
                            </div>

                            <div class="mb-3">
                                <label for="requirements" class="form-label">Requirements & Qualifications *</label>
                                <textarea class="form-control @error('requirements') is-invalid @enderror" 
                                          id="requirements" name="requirements" rows="6" required>{{ old('requirements') }}</textarea>
                                @error('requirements')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="text-muted">List the required skills, experience, and qualifications. Use bullet points.</small>
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="mb-4">
                            <h5 class="mb-3">Status</h5>
                            
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" 
                                       id="is_active" name="is_active" value="1" 
                                       {{ old('is_active', true) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active">
                                    Active (visible to applicants)
                                </label>
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.jobs.index') }}" class="btn btn-secondary">
                                <i class="fas fa-times me-1"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-1"></i> Create Career
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Sidebar Help -->
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-header bg-info text-white">
                    <i class="fas fa-lightbulb me-2"></i>
                    Tips for Writing Great Career Posts
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <h6 class="mb-1"><i class="fas fa-check-circle text-success me-2"></i> Be Clear & Concise</h6>
                            <small class="text-muted">Use simple language and avoid jargon.</small>
                        </div>
                        <div class="list-group-item">
                            <h6 class="mb-1"><i class="fas fa-check-circle text-success me-2"></i> Highlight Benefits</h6>
                            <small class="text-muted">Mention growth opportunities and company culture.</small>
                        </div>
                        <div class="list-group-item">
                            <h6 class="mb-1"><i class="fas fa-check-circle text-success me-2"></i> Use Bullet Points</h6>
                            <small class="text-muted">Make requirements and responsibilities easy to scan.</small>
                        </div>
                        <div class="list-group-item">
                            <h6 class="mb-1"><i class="fas fa-check-circle text-success me-2"></i> Include Salary Range</h6>
                            <small class="text-muted">This attracts more qualified candidates.</small>
                        </div>
                        <div class="list-group-item">
                            <h6 class="mb-1"><i class="fas fa-check-circle text-success me-2"></i> Set Realistic Deadline</h6>
                            <small class="text-muted">Give candidates enough time to apply.</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Preview -->
            <div class="card mb-4">
                <div class="card-header bg-secondary text-white">
                    <i class="fas fa-eye me-2"></i>
                    Quick Preview
                </div>
                <div class="card-body">
                    <p class="text-muted">Your career posting will appear like this on the website:</p>
                    <div class="border rounded p-3 bg-light">
                        <h6 id="preview-title" class="mb-2">Job Title</h6>
                        <div class="d-flex flex-wrap gap-1 mb-2">
                            <span class="badge bg-info" id="preview-type">Type</span>
                            <span class="badge bg-secondary" id="preview-location">Location</span>
                            <span class="badge bg-success" id="preview-dept">Department</span>
                        </div>
                        <p class="small text-muted mb-2" id="preview-salary">Salary information</p>
                        <p class="small text-muted mb-0">Posted: Today</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Preview Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Update preview in real-time
    const titleInput = document.getElementById('title');
    const typeSelect = document.getElementById('type');
    const locationSelect = document.getElementById('location');
    const departmentInput = document.getElementById('department');
    const salaryMin = document.getElementById('salary_min');
    const salaryMax = document.getElementById('salary_max');
    const salaryPeriod = document.getElementById('salary_period');

    function updatePreview() {
        // Title
        document.getElementById('preview-title').textContent = 
            titleInput.value || 'Job Title';
        
        // Type
        const typeText = typeSelect.options[typeSelect.selectedIndex]?.text || 'Type';
        document.getElementById('preview-type').textContent = typeText;
        
        // Location
        const locationText = locationSelect.options[locationSelect.selectedIndex]?.text || 'Location';
        document.getElementById('preview-location').textContent = locationText;
        
        // Department
        document.getElementById('preview-dept').textContent = 
            departmentInput.value || 'Department';
        
        // Salary
        let salaryText = 'Salary: Negotiable';
        if (salaryMin.value || salaryMax.value) {
            const period = salaryPeriod.value ? 
                (salaryPeriod.value === 'hourly' ? '/hour' : 
                 salaryPeriod.value === 'monthly' ? '/month' : 
                 salaryPeriod.value === 'annually' ? '/year' : '') : '';
            
            if (salaryMin.value && salaryMax.value) {
                salaryText = `$${parseFloat(salaryMin.value).toLocaleString()} - $${parseFloat(salaryMax.value).toLocaleString()}${period}`;
            } else if (salaryMin.value) {
                salaryText = `From $${parseFloat(salaryMin.value).toLocaleString()}${period}`;
            } else if (salaryMax.value) {
                salaryText = `Up to $${parseFloat(salaryMax.value).toLocaleString()}${period}`;
            }
        }
        document.getElementById('preview-salary').textContent = salaryText;
    }

    // Add event listeners
    [titleInput, typeSelect, locationSelect, departmentInput, salaryMin, salaryMax, salaryPeriod]
        .forEach(element => {
            if (element) {
                element.addEventListener('input', updatePreview);
                element.addEventListener('change', updatePreview);
            }
        });

    // Initial preview update
    updatePreview();
});
</script>
</x-admin-layout>