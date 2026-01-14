<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services | Ride Aide LLC | Professional ADA Transportation</title>
    <meta name="description"
        content="Comprehensive ADA transportation services from Ride Aide LLC. Medical transport, wheelchair accessibility, personal errands, and specialized transportation solutions.">
 <meta name="title" content="Ride_Aide LLC – Safe & Compassionate Non-Emergency Medical Transportation">
    <meta name="description"
        content="Ride_Aide LLC provides reliable, compassionate non-emergency medical transportation throughout Washington. Serving seniors, disabled individuals, and those with limited mobility.">
    <meta name="keywords"
        content="Non-Emergency Medical Transportation, NEMT Washington, wheelchair transport, senior transport, Ride_Aide LLC, medical appointments, dialysis transport, therapy ride, Seattle medical ride, Tacoma transport service">
    <meta name="author" content="Daniel Mwangi, Web Designer - Kenya">
    <meta name="robots" content="index, follow">
    <meta name="language" content="en">
    <meta name="revisit-after" content="7 days">
    <meta name="distribution" content="global">
    <meta name="coverage" content="Worldwide">
    <meta name="copyright" content="Ride_Aide LLC">
    <meta name="reply-to" content="damalide20@gmail.com">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.rideaidellc.com">
    <meta property="og:title" content="Ride_Aide LLC – Safe & Compassionate Medical Transportation">
    <meta property="og:description"
        content="Non-emergency medical transportation services across Washington. Reliable, accessible, and senior-friendly.">
    <meta property="og:image" content="http://127.0.0.1:8000/images/ride-logo.png">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ride_Aide LLC – Medical Transport You Can Trust">
    <meta name="twitter:description"
        content="Transportation services for medical appointments, dialysis, therapy, and more across Washington.">
    <meta name="twitter:image" content="http://127.0.0.1:8000/images/ride-logo.png">

    <!-- Additional SEO -->
    <meta name="robots" content="index, follow">
    <meta name="language" content="en">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/ride-logo.PNG') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/ride-logo.PNG') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/ride-logo.PNG') }}">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --primary-blue: #1e40af;
            --primary-light: #3b82f6;
            --secondary-teal: #0d9488;
            --accent-orange: #f97316;
        }

        body {
            font-family: 'Roboto', sans-serif;
        }

        .font-heading {
            font-family: 'Poppins', sans-serif;
        }

        .service-gradient {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
        }

        .service-card {
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }

        .service-card:hover {
            transform: translateY(-5px);
            border-left-color: var(--accent-orange);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .service-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-teal) 100%);
            color: white;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
        }

        .service-detail-section {
            border-bottom: 1px solid #e5e7eb;
            padding-bottom: 3rem;
            margin-bottom: 3rem;
        }

        .service-detail-section:last-child {
            border-bottom: none;
        }

        .feature-list li {
            margin-bottom: 0.75rem;
            display: flex;
            align-items: flex-start;
        }

        .feature-list li i {
            color: var(--secondary-teal);
            margin-right: 0.75rem;
            margin-top: 0.25rem;
        }

        .pricing-badge {
            background-color: var(--accent-orange);
            color: white;
            padding: 0.25rem 1rem;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 600;
            display: inline-block;
        }

        .accordion-item {
            border-bottom: 1px solid #e5e7eb;
        }

        .accordion-header {
            padding: 1.25rem 0;
            cursor: pointer;
            position: relative;
        }

        .accordion-header::after {
            content: '+';
            position: absolute;
            right: 0;
            font-size: 1.5rem;
            color: var(--primary-blue);
            font-weight: 300;
            transition: transform 0.3s ease;
        }

        .accordion-header.active::after {
            content: '−';
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .btn-primary {
            background-color: var(--primary-blue);
            color: white;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: var(--primary-light);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background-color: var(--secondary-teal);
            color: white;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #0f766e;
            transform: translateY(-2px);
        }

        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary-blue);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .section-divider {
            width: 80px;
            height: 4px;
            background-color: var(--accent-orange);
            margin: 0 auto;
        }

        .breadcrumb-item {
            color: var(--primary-blue);
        }

        .breadcrumb-item:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Announcement Bar -->
<x-announcement-bar />

    <!-- Header -->
    <x-nav-layout />


<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Apply for: {{ $career->title }}</h1>
            <p class="text-gray-600">Please fill out the form below to submit your application</p>
            <div class="mt-4 inline-flex items-center space-x-2 text-sm text-gray-500">
                <i class="fas fa-building"></i>
                <span>{{ $career->department }}</span>
                <i class="fas fa-map-marker-alt ml-4"></i>
                <span>{{ ucfirst($career->location) }}</span>
                @if($career->salary_formatted)
                <i class="fas fa-money-bill-wave ml-4"></i>
                <span>{{ $career->salary_formatted }}</span>
                @endif
            </div>
        </div>

        @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
            {{ session('error') }}
        </div>
        @endif

        <!-- Application Form -->
        <div class="bg-white rounded-xl shadow-lg p-6 md:p-8">
            <form action="{{ route('jobs.apply.store', $career) }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <!-- Personal Information -->
                <div class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 pb-3 border-b">Personal Information</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- First Name -->
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">
                                First Name *
                            </label>
                            <input type="text" id="first_name" name="first_name" 
                                   value="{{ old('first_name') }}" required
                                   class="form-input w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                            @error('first_name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <!-- Last Name -->
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">
                                Last Name *
                            </label>
                            <input type="text" id="last_name" name="last_name" 
                                   value="{{ old('last_name') }}" required
                                   class="form-input w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                            @error('last_name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Email Address *
                            </label>
                            <input type="email" id="email" name="email" 
                                   value="{{ old('email') }}" required
                                   class="form-input w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                                Phone Number *
                            </label>
                            <input type="tel" id="phone" name="phone" 
                                   value="{{ old('phone') }}" required
                                   class="form-input w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                   placeholder="(123) 456-7890">
                            @error('phone')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <!-- Address -->
                    <div class="mt-6">
                        <label for="address" class="block text-sm font-medium text-gray-700 mb-2">
                            Street Address
                        </label>
                        <input type="text" id="address" name="address" 
                               value="{{ old('address') }}"
                               class="form-input w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-6">
                        <!-- City -->
                        <div>
                            <label for="city" class="block text-sm font-medium text-gray-700 mb-2">City</label>
                            <input type="text" id="city" name="city" 
                                   value="{{ old('city') }}"
                                   class="form-input w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        
                        <!-- State -->
                        <div>
                            <label for="state" class="block text-sm font-medium text-gray-700 mb-2">State</label>
                            <input type="text" id="state" name="state" 
                                   value="{{ old('state') }}"
                                   class="form-input w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        
                        <!-- Country -->
                        <div>
                            <label for="country" class="block text-sm font-medium text-gray-700 mb-2">Country</label>
                            <input type="text" id="country" name="country" 
                                   value="{{ old('country') }}"
                                   class="form-input w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        
                        <!-- Postal Code -->
                        <div>
                            <label for="postal_code" class="block text-sm font-medium text-gray-700 mb-2">Postal Code</label>
                            <input type="text" id="postal_code" name="postal_code" 
                                   value="{{ old('postal_code') }}"
                                   class="form-input w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                        </div>
                    </div>
                </div>
                
                <!-- Documents -->
                <div class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 pb-3 border-b">Documents</h2>
                    
                    <!-- Resume -->
                    <div class="mb-6">
                        <label for="resume" class="block text-sm font-medium text-gray-700 mb-2">
                            Resume / CV *
                            <span class="text-sm text-gray-500">(PDF, DOC, DOCX, max 5MB)</span>
                        </label>
                        <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required
                               class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        @error('resume')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Additional Documents -->
                    <div>
                        <label for="additional_documents" class="block text-sm font-medium text-gray-700 mb-2">
                            Additional Documents
                            <span class="text-sm text-gray-500">(Optional: Certificates, references, etc.)</span>
                        </label>
                        <input type="file" id="additional_documents" name="additional_documents[]" 
                               accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" multiple
                               class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100">
                        <p class="text-sm text-gray-500 mt-1">You can select multiple files (max 5MB each)</p>
                    </div>
                </div>
                
                <!-- Cover Letter & Links -->
                <div class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 pb-3 border-b">Additional Information</h2>
                    
                    <!-- Cover Letter -->
                    <div class="mb-6">
                        <label for="cover_letter" class="block text-sm font-medium text-gray-700 mb-2">
                            Cover Letter
                            <span class="text-sm text-gray-500">(Optional)</span>
                        </label>
                        <textarea id="cover_letter" name="cover_letter" rows="5"
                                  class="form-textarea w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                  placeholder="Tell us why you're interested in this position and why you'd be a great fit...">{{ old('cover_letter') }}</textarea>
                    </div>
                    
                    <!-- LinkedIn & Portfolio -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="linkedin_url" class="block text-sm font-medium text-gray-700 mb-2">
                                LinkedIn Profile URL
                            </label>
                            <input type="url" id="linkedin_url" name="linkedin_url" 
                                   value="{{ old('linkedin_url') }}"
                                   class="form-input w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                   placeholder="https://linkedin.com/in/yourprofile">
                        </div>
                        
                        <div>
                            <label for="portfolio_url" class="block text-sm font-medium text-gray-700 mb-2">
                                Portfolio Website
                            </label>
                            <input type="url" id="portfolio_url" name="portfolio_url" 
                                   value="{{ old('portfolio_url') }}"
                                   class="form-input w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                                   placeholder="https://yourportfolio.com">
                        </div>
                    </div>
                    
                    <!-- How did you hear about us -->
                    <div class="mt-6">
                        <label for="hear_about_us" class="block text-sm font-medium text-gray-700 mb-2">
                            How did you hear about this position?
                        </label>
                        <select id="hear_about_us" name="hear_about_us"
                                class="form-select w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                            <option value="">Select an option</option>
                            <option value="LinkedIn" {{ old('hear_about_us') == 'LinkedIn' ? 'selected' : '' }}>LinkedIn</option>
                            <option value="Indeed" {{ old('hear_about_us') == 'Indeed' ? 'selected' : '' }}>Indeed</option>
                            <option value="Company Website" {{ old('hear_about_us') == 'Company Website' ? 'selected' : '' }}>Company Website</option>
                            <option value="Referral" {{ old('hear_about_us') == 'Referral' ? 'selected' : '' }}>Referral</option>
                            <option value="Job Fair" {{ old('hear_about_us') == 'Job Fair' ? 'selected' : '' }}>Job Fair</option>
                            <option value="Other" {{ old('hear_about_us') == 'Other' ? 'selected' : '' }}>Other</option>
                        </select>
                    </div>
                </div>
                
                <!-- Terms & Submit -->
                <div class="border-t pt-8">
                    <div class="mb-6">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="terms" required
                                   class="form-checkbox h-5 w-5 text-blue-600 rounded">
                            <span class="ml-2 text-gray-700">
                                I confirm that the information provided is accurate and complete. 
                                I understand that any false statements may disqualify me from employment.
                            </span>
                        </label>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                        <a href="{{ route('jobs.index') }}" class="text-blue-600 hover:text-blue-800">
                            <i class="fas fa-arrow-left mr-2"></i>Back to Jobs
                        </a>
                        <button type="submit" 
                                class="px-8 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors w-full sm:w-auto">
                            <i class="fas fa-paper-plane mr-2"></i>Submit Application
                        </button>
                    </div>
                </div>
            </form>
        </div>
        
        <!-- Privacy Notice -->
        <div class="mt-8 text-center text-sm text-gray-500">
            <p>Your information is secure and will only be used for recruitment purposes.</p>
        </div>
    </div>
</div>

<script>
// File upload preview and size validation
document.addEventListener('DOMContentLoaded', function() {
    const resumeInput = document.getElementById('resume');
    const additionalInput = document.getElementById('additional_documents');
    
    function validateFileSize(file, maxSizeMB = 5) {
        const maxSize = maxSizeMB * 1024 * 1024; // Convert MB to bytes
        if (file.size > maxSize) {
            alert(`File "${file.name}" exceeds the maximum size of ${maxSizeMB}MB`);
            return false;
        }
        return true;
    }
    
    if (resumeInput) {
        resumeInput.addEventListener('change', function() {
            if (this.files.length > 0) {
                validateFileSize(this.files[0]);
            }
        });
    }
    
    if (additionalInput) {
        additionalInput.addEventListener('change', function() {
            Array.from(this.files).forEach(file => {
                validateFileSize(file);
            });
        });
    }
});
</script>

    <!-- JavaScript -->
    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileNav = document.getElementById('mobileNav');

        mobileMenuBtn.addEventListener('click', () => {
            mobileNav.classList.toggle('hidden');
            const icon = mobileMenuBtn.querySelector('i');
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-times');
        });

        // Accordion Functionality
        document.querySelectorAll('.accordion-header').forEach(header => {
            header.addEventListener('click', () => {
                header.classList.toggle('active');
                const content = header.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + 'px';
                }
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    // Close mobile menu if open
                    if (!mobileNav.classList.contains('hidden')) {
                        mobileNav.classList.add('hidden');
                        mobileMenuBtn.querySelector('i').classList.remove('fa-times');
                        mobileMenuBtn.querySelector('i').classList.add('fa-bars');
                    }

                    e.preventDefault();
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });

                    // Update URL without page reload
                    history.pushState(null, null, targetId);
                }
            });
        });

        // Open accordion if hash in URL
        window.addEventListener('load', () => {
            const hash = window.location.hash;
            if (hash) {
                const targetElement = document.querySelector(hash);
                if (targetElement) {
                    setTimeout(() => {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }, 100);
                }
            }
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!mobileMenuBtn.contains(event.target) && !mobileNav.contains(event.target)) {
                if (!mobileNav.classList.contains('hidden')) {
                    mobileNav.classList.add('hidden');
                    mobileMenuBtn.querySelector('i').classList.remove('fa-times');
                    mobileMenuBtn.querySelector('i').classList.add('fa-bars');
                }
            }
        });
    </script>
</body>

</html>
