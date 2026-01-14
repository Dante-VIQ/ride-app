<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Aide LLC | Professional ADA Transportation Services</title>
    <meta name="description"
        content="Ride Aide LLC provides reliable, professional ADA-compliant transportation services in the Seattle area. Medical transport, wheelchair accessibility, and comfortable rides.">

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

        .hero-gradient {
            background: linear-gradient(rgba(80, 103, 180, 0.9), rgba(117, 163, 238, 0.9)), url('/images/hero.png');
            background-size: cover;
            background-position: center;

        }

        .service-card {
            transition: all 0.3s ease;
            border-bottom: 4px solid var(--primary-blue);
        }

        .service-card:hover {
            transform: translateY(-5px);
            border-bottom-color: var(--accent-orange);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-blue);
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

        .testimonial-card {
            background-color: #f8fafc;
            border-left: 4px solid var(--primary-blue);
        }

        .section-divider {
            width: 80px;
            height: 4px;
            background-color: var(--accent-orange);
            margin: 0 auto;
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Announcement Bar -->
    <div class="bg-blue-900 text-white py-2">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-sm text-center md:text-left mb-1 md:mb-0">
                    <i class="fas fa-phone-alt mr-2"></i> Call Now: <a href="tel:+12535451994"
                        class="font-semibold hover:text-blue-200">+1(253) 5451994</a>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-sm">24/7 Service Available</span>
                    <a href="/booking"
                        class="text-sm bg-orange-500 hover:bg-orange-600 px-3 py-1 rounded font-semibold transition-colors">
                        <i class="fas fa-calendar-alt mr-1"></i> Book Online
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <x-nav-layout />

    <!-- Hero Section -->
    <section class="relative">
        <div class="hero-gradient text-white">
            <div class="container mx-auto px-4 py-16 md:py-24">
                <div class="max-w-3xl">
                    <h2 class="font-heading text-4xl md:text-5xl font-bold mb-6 leading-tight">
                        Reliable ADA Transportation <br>When You Need It Most
                    </h2>
                    <p class="text-xl mb-8 opacity-90">
                        Ride Aide LLC provides professional, compassionate, and accessible transportation services
                        throughout the Seattle area. Safe, comfortable rides for medical appointments, errands, and
                        more.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/booking" class="btn-primary px-8 py-4 rounded-lg font-semibold text-lg text-center">
                            <i class="fas fa-calendar-check mr-2"></i> Schedule a Ride
                        </a>
                        <a href="tel:+12065551234"
                            class="bg-white text-blue-700 px-8 py-4 rounded-lg font-semibold text-lg text-center hover:bg-gray-100 transition-colors">
                            <i class="fas fa-phone-alt mr-2"></i> Call Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-800 mb-4">Our Services</h2>
                <div class="section-divider mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    We offer comprehensive ADA-compliant transportation solutions designed to meet your specific needs
                </p>
            </div>

            <livewire:service-card />
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 bg-blue-50">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-800 mb-6">About Ride Aide LLC</h2>
                    <div class="section-divider mb-6 ml-0"></div>
                    <p class="text-gray-600 mb-6">
                        Founded with a commitment to accessibility and reliability, Ride Aide LLC has been serving the
                        Seattle community with professional ADA transportation services. Our mission is to provide safe,
                        comfortable, and dignified transportation for all.
                    </p>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span>Fully licensed and insured ADA-compliant vehicles</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span>Professional drivers trained in passenger assistance</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span>24/7 dispatch and emergency services</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-blue-700 mt-1 mr-3"></i>
                            <span>Accept insurance and various payment methods</span>
                        </div>
                    </div>
                    <a href="/about" class="btn-primary px-6 py-3 rounded-lg font-semibold inline-block">
                        Learn More About Us
                    </a>
                </div>
                <div>
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Why Choose Ride Aide</h3>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="text-center">
                                <div class="stat-number">98%</div>
                                <p class="text-gray-600 font-medium">On-time Rate</p>
                            </div>
                            <div class="text-center">
                                <div class="stat-number">24/7</div>
                                <p class="text-gray-600 font-medium">Service Available</p>
                            </div>
                            <div class="text-center">
                                <div class="stat-number">5000+</div>
                                <p class="text-gray-600 font-medium">Rides Completed</p>
                            </div>
                            <div class="text-center">
                                <div class="stat-number">15</div>
                                <p class="text-gray-600 font-medium">Min Avg Wait</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials Section -->
    <section class="py-16 bg-white">
        {{-- <livewire:testimonials /> --}}
    </section>


    <!-- CTA Section -->
    <section class="py-16 bg-blue-700 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="font-heading text-3xl md:text-4xl font-bold mb-6">Ready to Schedule Your Ride?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">
                Contact us today to book reliable, accessible transportation. We're here to help you get where you need
                to go.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/booking" class="btn-secondary px-8 py-4 rounded-lg font-semibold text-lg">
                    <i class="fas fa-calendar-alt mr-2"></i> Book Online
                </a>
                <a href="tel:+12535451994"
                    class="bg-white text-blue-700 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-phone-alt mr-2"></i> Call Now: +1(253) 5451994
                </a>
            </div>
        </div>
    </section>

    <!-- Areas Served -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-800 mb-4">Areas We Serve</h2>
                <div class="section-divider mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Ride Aide provides transportation services throughout the greater Seattle area
                </p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="bg-white rounded-lg p-4 text-center shadow-sm">
                    <p class="font-semibold text-gray-800">Seattle</p>
                </div>
                <div class="bg-white rounded-lg p-4 text-center shadow-sm">
                    <p class="font-semibold text-gray-800">Bellevue</p>
                </div>
                <div class="bg-white rounded-lg p-4 text-center shadow-sm">
                    <p class="font-semibold text-gray-800">Redmond</p>
                </div>
                <div class="bg-white rounded-lg p-4 text-center shadow-sm">
                    <p class="font-semibold text-gray-800">Kirkland</p>
                </div>
                <div class="bg-white rounded-lg p-4 text-center shadow-sm">
                    <p class="font-semibold text-gray-800">Renton</p>
                </div>
                <div class="bg-white rounded-lg p-4 text-center shadow-sm">
                    <p class="font-semibold text-gray-800">Federal Way</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Add this section to your home.blade.php --}}
    <section class="py-16 bg-gradient-to-r from-blue-50 to-indigo-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Join Our Team</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    We're always looking for passionate individuals to help us provide exceptional transportation
                    services.
                </p>
            </div>

            <!-- Quick Apply Section -->
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 mb-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                    <!-- Left Content -->
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Quick Career Inquiry</h3>
                        <p class="text-gray-600 mb-6">
                            Not sure which position fits you? Send us your resume and we'll notify you when a matching
                            position opens up.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div
                                    class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-paper-plane text-blue-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Quick Application</h4>
                                    <p class="text-gray-600 text-sm">Submit your resume in under 2 minutes</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div
                                    class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-bell text-green-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Get Notified</h4>
                                    <p class="text-gray-600 text-sm">We'll contact you for relevant openings</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div
                                    class="flex-shrink-0 w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-clock text-purple-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Save Time</h4>
                                    <p class="text-gray-600 text-sm">No need to fill lengthy applications</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Form -->
                    <div class="bg-gray-50 rounded-xl p-6">
                        <h4 class="text-xl font-bold text-gray-900 mb-4">Submit Your Interest</h4>
                        <form id="quickApplicationForm" enctype="multipart/form-data">
                            @csrf
                            <div class="space-y-4">
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <input type="text" name="first_name" placeholder="First Name" required
                                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                                    </div>
                                    <div>
                                        <input type="text" name="last_name" placeholder="Last Name" required
                                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                                    </div>
                                </div>
                                <div>
                                    <input type="email" name="email" placeholder="Email Address" required
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <input type="tel" name="phone" placeholder="Phone Number" required
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Resume/CV *</label>
                                    <input type="file" name="resume" accept=".pdf,.doc,.docx" required
                                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                                    <p class="text-xs text-gray-500 mt-1">PDF, DOC, or DOCX files only (max 5MB)</p>
                                </div>
                                <div>
                                    <textarea name="note" rows="2" placeholder="Optional: What position are you interested in?"
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-blue-500"></textarea>
                                </div>
                                <button type="submit"
                                    class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-medium hover:bg-blue-700 transition-colors">
                                    <i class="fas fa-paper-plane mr-2"></i>Submit Interest
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Open Positions Preview -->
            <div class="text-center mb-10">
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Current Open Positions</h3>
                <p class="text-gray-600">Browse our available positions and apply directly</p>
            </div>

            <!-- Positions Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                @php
                    $positions = \App\Models\Career::where('is_active', true)
                        ->where(function ($query) {
                            $query->whereNull('application_deadline')->orWhere('application_deadline', '>=', now());
                        })
                        ->orderBy('created_at', 'desc')
                        ->take(3)
                        ->get();
                @endphp

                @forelse($positions as $position)
                    <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 p-6">
                        <div class="flex justify-between items-start mb-4">
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                {{ ucfirst(str_replace('-', ' ', $position->type)) }}
                            </span>
                            <span class="text-sm text-gray-500">{{ $position->department }}</span>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">{{ $position->title }}</h4>
                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-gray-600">
                                <i class="fas fa-map-marker-alt mr-2 text-sm"></i>
                                <span class="text-sm">{{ ucfirst($position->location) }}</span>
                            </div>
                            @if ($position->salary_formatted)
                                <div class="flex items-center text-gray-600">
                                    <i class="fas fa-money-bill-wave mr-2 text-sm"></i>
                                    <span class="text-sm">{{ $position->salary_formatted }}</span>
                                </div>
                            @endif
                        </div>
                        <p class="text-gray-600 text-sm mb-6 line-clamp-2">
                            {{ Str::limit(strip_tags($position->description), 100) }}
                        </p>
                        <div class="flex space-x-3">
                            <a href="{{ route('jobs.show', $position) }}"
                                class="flex-1 text-center px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors text-sm">
                                View Details
                            </a>
                            <a href="{{ route('jobs.apply', $position) }}"
                                class="flex-1 text-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm">
                                Apply Now
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-8">
                        <div class="text-gray-400 mb-4">
                            <i class="fas fa-briefcase text-4xl"></i>
                        </div>
                        <p class="text-gray-600">No open positions at the moment.</p>
                        <p class="text-gray-500 text-sm">Check back soon or submit your interest above.</p>
                    </div>
                @endforelse
            </div>

            <!-- CTA Button -->
            <div class="text-center">
                <a href="{{ route('jobs.index') }}"
                    class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-medium rounded-lg hover:from-blue-700 hover:to-indigo-700 transition-all shadow-lg hover:shadow-xl">
                    <i class="fas fa-briefcase mr-3"></i>
                    View All Career Opportunities
                    <i class="fas fa-arrow-right ml-3"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center mb-6">
                        <div class="bg-blue-700 text-white w-10 h-10 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-wheelchair"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Ride Aide LLC</h3>
                            <p class="text-gray-400 text-sm">Professional ADA Transportation</p>
                        </div>
                    </div>
                    <p class="text-gray-400 mb-6">
                        Providing reliable, accessible transportation services throughout the Seattle area since 2015.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="/" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
                        <li><a href="/services" class="text-gray-400 hover:text-white transition-colors">Services</a>
                        </li>
                        <li><a href="/about" class="text-gray-400 hover:text-white transition-colors">About Us</a>
                        </li>
                        <li><a href="/fleet" class="text-gray-400 hover:text-white transition-colors">Our Fleet</a>
                        </li>
                        <li><a href="/areas" class="text-gray-400 hover:text-white transition-colors">Areas
                                Served</a></li>
                        <li><a href="/contact" class="text-gray-400 hover:text-white transition-colors">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Our Services</h4>
                    <ul class="space-y-3">
                        <li><a href="/services/medical"
                                class="text-gray-400 hover:text-white transition-colors">Medical Transportation</a>
                        </li>
                        <li><a href="/services/errands"
                                class="text-gray-400 hover:text-white transition-colors">Personal Errands</a></li>
                        <li><a href="/services/social" class="text-gray-400 hover:text-white transition-colors">Social
                                Events</a></li>
                        <li><a href="/services/airport"
                                class="text-gray-400 hover:text-white transition-colors">Airport Transfers</a></li>
                        <li><a href="/services/corporate"
                                class="text-gray-400 hover:text-white transition-colors">Corporate Transport</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Contact Info</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-phone text-blue-400 mt-1 mr-3"></i>
                            <a href="tel:+12065551234"
                                class="text-gray-400 hover:text-white transition-colors">+1(253) 5451994</a>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope text-blue-400 mt-1 mr-3"></i>
                            <a href="mailto:info@rideaidellc.com"
                                class="text-gray-400 hover:text-white transition-colors">info@rideaidellc.com</a>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-blue-400 mt-1 mr-3"></i>
                            <span class="text-gray-400">Seattle, WA</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-clock text-blue-400 mt-1 mr-3"></i>
                            <span class="text-gray-400">24/7 Dispatch</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-gray-800 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-500 text-sm mb-4 md:mb-0">
                        &copy; 2024 Ride Aide LLC. All rights reserved.
                    </p>
                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="/privacy" class="text-gray-500 hover:text-white text-sm transition-colors">Privacy
                            Policy</a>
                        <a href="/terms" class="text-gray-500 hover:text-white text-sm transition-colors">Terms of
                            Service</a>
                        <a href="/accessibility"
                            class="text-gray-500 hover:text-white text-sm transition-colors">Accessibility
                            Statement</a>
                        <a href="/ada-compliance" class="text-gray-500 hover:text-white text-sm transition-colors">ADA
                            Compliance</a>
                    </div>
                </div>
                <p class="text-gray-600 text-xs text-center mt-4">
                    Ride Aide LLC is committed to providing equal access transportation services in compliance with ADA
                    regulations.
                </p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Interactive Elements -->
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

        // Form submission (example - will be handled by Laravel)
        const bookingForm = document.querySelector('form');
        if (bookingForm) {
            bookingForm.addEventListener('submit', function(e) {
                e.preventDefault();
                // Form submission will be handled by Laravel backend
                console.log('Form submitted - will be processed by Laravel');
            });
        }

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

        // Add scroll effect to header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('shadow-lg');
            } else {
                header.classList.remove('shadow-lg');
            }
        });
    </script>
</body>

</html>
