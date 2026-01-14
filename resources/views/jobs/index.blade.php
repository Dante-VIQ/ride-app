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
    <!-- Header -->
    <x-nav-layout />

<div class="bg-gray-50 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Join Our Team</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                At RideAlly, we're passionate about providing exceptional transportation services. 
                Join us in making a difference in people's lives.
            </p>
        </div>

        <!-- Current Openings -->
        <div class="mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Current Openings</h2>
            
            @if($careers->isEmpty())
            <div class="text-center py-12 bg-white rounded-xl shadow">
                <i class="fas fa-briefcase text-gray-300 text-6xl mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-700 mb-2">No Open Positions</h3>
                <p class="text-gray-500">Check back later for new opportunities.</p>
            </div>
            @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($careers as $career)
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <!-- Career Type Badge -->
                        <div class="flex justify-between items-start mb-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium 
                                {{ $career->type === 'full-time' ? 'bg-blue-100 text-blue-800' : 
                                   ($career->type === 'part-time' ? 'bg-green-100 text-green-800' : 
                                   ($career->type === 'contract' ? 'bg-yellow-100 text-yellow-800' : 'bg-purple-100 text-purple-800')) }}">
                                {{ ucfirst(str_replace('-', ' ', $career->type)) }}
                            </span>
                            @if(!$career->is_open)
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800">
                                Closed
                            </span>
                            @endif
                        </div>

                        <!-- Career Title -->
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $career->title }}</h3>
                        
                        <!-- Career Details -->
                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-gray-600">
                                <i class="fas fa-building mr-2"></i>
                                <span>{{ $career->department }}</span>
                            </div>
                            <div class="flex items-center text-gray-600">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                <span>{{ ucfirst($career->location) }}</span>
                            </div>
                            <div class="flex items-center text-gray-600">
                                <i class="fas fa-money-bill-wave mr-2"></i>
                                <span>{{ $career->salary_formatted }}</span>
                            </div>
                            @if($career->application_deadline)
                            <div class="flex items-center text-gray-600">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                <span>Apply by {{ $career->application_deadline->format('M d, Y') }}</span>
                            </div>
                            @endif
                        </div>
                        
                        <!-- Description Preview -->
                        <p class="text-gray-600 mb-6 line-clamp-2">
                            {{ Str::limit(strip_tags($career->description), 120) }}
                        </p>
                        
                        <!-- CTA Buttons -->
                        <div class="flex space-x-3">
                            <a href="{{ route('jobs.show', $career) }}" 
                               class="flex-1 text-center px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors">
                                View Details
                            </a>
                            @if($career->is_open)
                            <a href="{{ route('jobs.apply', $career) }}" 
                               class="flex-1 text-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                                Apply Now
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>

        <!-- Why Work With Us -->
        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-8 mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Why Work at RideAlly?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heart text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Make a Difference</h3>
                    <p class="text-gray-600">Help people access essential transportation services in your community.</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Great Team</h3>
                    <p class="text-gray-600">Join a supportive team that values collaboration and growth.</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-chart-line text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Growth Opportunities</h3>
                    <p class="text-gray-600">We invest in our employees with training and career development.</p>
                </div>
            </div>
        </div>

        <!-- Application Process -->
        <div class="mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Our Hiring Process</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">1</div>
                    <h3 class="font-semibold text-gray-900 mb-2">Application</h3>
                    <p class="text-gray-600 text-sm">Submit your application online</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">2</div>
                    <h3 class="font-semibold text-gray-900 mb-2">Review</h3>
                    <p class="text-gray-600 text-sm">HR team reviews your application</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">3</div>
                    <h3 class="font-semibold text-gray-900 mb-2">Interview</h3>
                    <p class="text-gray-600 text-sm">Phone/Zoom or in-person interview</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">4</div>
                    <h3 class="font-semibold text-gray-900 mb-2">Offer</h3>
                    <p class="text-gray-600 text-sm">Job offer and onboarding</p>
                </div>
            </div>
        </div>
    </div>
</div>

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
