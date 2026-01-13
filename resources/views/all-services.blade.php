<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services | Ride Aide LLC | Professional ADA Transportation</title>
    <meta name="description"
        content="Comprehensive ADA transportation services from Ride Aide LLC. Medical transport, wheelchair accessibility, personal errands, and specialized transportation solutions.">

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

    <!-- Breadcrumb -->
    <div class="bg-gray-100 py-4">
        <div class="container mx-auto px-4">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" class="inline-flex items-center text-sm text-gray-700 hover:text-blue-700">
                            <i class="fas fa-home mr-2"></i>
                            Home
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Services</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="service-gradient text-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl">
                <h1 class="font-heading text-4xl md:text-5xl font-bold mb-6">Our Transportation Services</h1>
                <p class="text-xl mb-8 opacity-90">
                    Comprehensive ADA-compliant transportation solutions designed for safety, comfort, and reliability.
                    We serve individuals with disabilities, seniors, and anyone requiring accessible transportation.
                </p>
                <div class="flex flex-wrap gap-3 mb-6">
                    <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium">ADA
                        Compliant</span>
                    <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium">Wheelchair
                        Accessible</span>
                    <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium">24/7
                        Service</span>
                    <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium">Insurance
                        Accepted</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Service Overview -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-800 mb-4">Our Service Categories</h2>
                <div class="section-divider mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Browse our comprehensive range of accessible transportation services
                </p>
            </div>
           
                <!-- Service Category 1 -->
                <livewire:service-card />
           
        </div>
    </section>

    <!-- Detailed Service Sections -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <!-- Medical Transportation -->
            <div id="medical" class="service-detail-section">
                <div class="grid lg:grid-cols-2 gap-12 items-start">
                    <div>
                        <div class="flex items-center mb-6">
                            <div class="service-icon">
                                <i class="fas fa-hospital"></i>
                            </div>
                            <div class="ml-6">
                                <h2 class="font-heading text-3xl font-bold text-gray-800">Medical Transportation</h2>
                                <div class="pricing-badge mt-2">Insurance Accepted</div>
                            </div>
                        </div>

                        <p class="text-gray-600 mb-6">
                            Our medical transportation service is designed to provide safe, reliable transport to all
                            types of medical appointments. We understand the importance of timely arrival for medical
                            care and prioritize your health and comfort.
                        </p>

                        <h3 class="text-xl font-bold text-gray-800 mb-4">Service Details</h3>
                        <ul class="feature-list mb-8">
                            <li><i class="fas fa-check-circle"></i> Transportation to hospitals, clinics, and medical
                                centers</li>
                            <li><i class="fas fa-check-circle"></i> Dialysis center transportation (3+ times weekly)
                            </li>
                            <li><i class="fas fa-check-circle"></i> Physical therapy and rehabilitation appointments
                            </li>
                            <li><i class="fas fa-check-circle"></i> Dental and vision care appointments</li>
                            <li><i class="fas fa-check-circle"></i> Specialist consultations and follow-up visits</li>
                            <li><i class="fas fa-check-circle"></i> Medical equipment transport assistance</li>
                            <li><i class="fas fa-check-circle"></i> Companion accommodation for medical visits</li>
                        </ul>

                        <div class="bg-blue-50 border border-blue-100 rounded-xl p-6 mb-8">
                            <h4 class="font-bold text-blue-800 mb-2">Insurance & Payment Options</h4>
                            <p class="text-gray-600 text-sm">
                                We accept most major insurance plans, Medicare, Medicaid, and private pay. Our billing
                                specialists can help verify your coverage and handle all necessary paperwork.
                            </p>
                        </div>

                        <a href="/booking?service=medical"
                            class="btn-primary px-8 py-3 rounded-lg font-semibold inline-block">
                            <i class="fas fa-calendar-check mr-2"></i> Book Medical Transport
                        </a>
                    </div>

                    <div>
                        <div class="bg-white rounded-xl shadow-lg p-8">
                            <h3 class="text-xl font-bold text-gray-800 mb-6">Medical Service Features</h3>

                            <div class="space-y-6">
                                <div class="flex items-start">
                                    <div
                                        class="bg-blue-100 text-blue-700 w-12 h-12 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 mb-1">Priority Scheduling</h4>
                                        <p class="text-gray-600 text-sm">Medical appointments receive priority in our
                                            scheduling system.</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div
                                        class="bg-blue-100 text-blue-700 w-12 h-12 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 mb-1">Safety Protocols</h4>
                                        <p class="text-gray-600 text-sm">Enhanced cleaning and safety measures for
                                            medical transport.</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div
                                        class="bg-blue-100 text-blue-700 w-12 h-12 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                        <i class="fas fa-user-md"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 mb-1">Trained Staff</h4>
                                        <p class="text-gray-600 text-sm">Drivers trained in passenger assistance and
                                            basic medical awareness.</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div
                                        class="bg-blue-100 text-blue-700 w-12 h-12 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                        <i class="fas fa-file-medical"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 mb-1">Documentation</h4>
                                        <p class="text-gray-600 text-sm">Complete trip documentation for insurance and
                                            medical records.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Personal Errands -->
            <div id="personal" class="service-detail-section">
                <div class="grid lg:grid-cols-2 gap-12 items-start">
                    <div>
                        <div class="flex items-center mb-6">
                            <div class="service-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div class="ml-6">
                                <h2 class="font-heading text-3xl font-bold text-gray-800">Personal Errands</h2>
                                <div class="pricing-badge mt-2">Hourly Rates Available</div>
                            </div>
                        </div>

                        <p class="text-gray-600 mb-6">
                            Maintain your independence with our personal errand service. We provide transportation and
                            assistance for your daily needs, allowing you to complete essential tasks comfortably and
                            safely.
                        </p>

                        <h3 class="text-xl font-bold text-gray-800 mb-4">What We Can Help With</h3>
                        <div class="grid sm:grid-cols-2 gap-4 mb-8">
                            <div class="bg-white p-4 rounded-lg border border-gray-200">
                                <i class="fas fa-store text-blue-700 mb-2"></i>
                                <p class="font-medium text-gray-800">Grocery Shopping</p>
                            </div>
                            <div class="bg-white p-4 rounded-lg border border-gray-200">
                                <i class="fas fa-prescription-bottle-medical text-blue-700 mb-2"></i>
                                <p class="font-medium text-gray-800">Pharmacy Pickups</p>
                            </div>
                            <div class="bg-white p-4 rounded-lg border border-gray-200">
                                <i class="fas fa-university text-blue-700 mb-2"></i>
                                <p class="font-medium text-gray-800">Banking Services</p>
                            </div>
                            <div class="bg-white p-4 rounded-lg border border-gray-200">
                                <i class="fas fa-tshirt text-blue-700 mb-2"></i>
                                <p class="font-medium text-gray-800">Dry Cleaning</p>
                            </div>
                        </div>

                        <div class="bg-green-50 border border-green-100 rounded-xl p-6 mb-8">
                            <h4 class="font-bold text-green-800 mb-2">Flexible Service Options</h4>
                            <p class="text-gray-600 text-sm">
                                Choose from one-time errands or schedule regular weekly/monthly services. We offer
                                waiting time allowances for your appointments and shopping needs.
                            </p>
                        </div>

                        <a href="/booking?service=errands"
                            class="btn-primary px-8 py-3 rounded-lg font-semibold inline-block">
                            <i class="fas fa-calendar-alt mr-2"></i> Schedule Errand Service
                        </a>
                    </div>

                    <div>
                        <div class="bg-white rounded-xl shadow-lg p-8">
                            <h3 class="text-xl font-bold text-gray-800 mb-6">Pricing Options</h3>

                            <div class="space-y-6">
                                <div class="border border-gray-200 rounded-lg p-6">
                                    <h4 class="font-bold text-gray-800 mb-2">Hourly Service</h4>
                                    <p class="text-gray-600 text-sm mb-4">Perfect for multiple errands or shopping
                                        trips</p>
                                    <div class="flex items-baseline">
                                        <span class="text-3xl font-bold text-gray-800">$45</span>
                                        <span class="text-gray-600 ml-2">/ hour</span>
                                    </div>
                                    <ul class="mt-4 space-y-2 text-sm">
                                        <li class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>2-hour minimum</span>
                                        </li>
                                        <li class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Includes waiting time</span>
                                        </li>
                                        <li class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Driver assistance available</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="border border-gray-200 rounded-lg p-6">
                                    <h4 class="font-bold text-gray-800 mb-2">Single Errand</h4>
                                    <p class="text-gray-600 text-sm mb-4">For quick trips to one location</p>
                                    <div class="flex items-baseline">
                                        <span class="text-3xl font-bold text-gray-800">$30</span>
                                        <span class="text-gray-600 ml-2">+ mileage</span>
                                    </div>
                                    <ul class="mt-4 space-y-2 text-sm">
                                        <li class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Up to 30 minutes waiting</span>
                                        </li>
                                        <li class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Round trip included</span>
                                        </li>
                                        <li class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Package assistance</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social & Community -->
            <div id="social" class="service-detail-section">
                <div class="grid lg:grid-cols-2 gap-12 items-start">
                    <div>
                        <div class="flex items-center mb-6">
                            <div class="service-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="ml-6">
                                <h2 class="font-heading text-3xl font-bold text-gray-800">Social & Community Transport
                                </h2>
                                <div class="pricing-badge mt-2">Group Rates Available</div>
                            </div>
                        </div>

                        <p class="text-gray-600 mb-6">
                            Stay connected with your community and loved ones. Our social transportation service ensures
                            you can participate in activities, events, and gatherings that are important to you.
                        </p>

                        <h3 class="text-xl font-bold text-gray-800 mb-4">Popular Destinations</h3>
                        <div class="flex flex-wrap gap-3 mb-8">
                            <span
                                class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium">Community
                                Centers</span>
                            <span
                                class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium">Religious
                                Services</span>
                            <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium">Family
                                Gatherings</span>
                            <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium">Senior
                                Centers</span>
                            <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium">Social
                                Clubs</span>
                            <span
                                class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium">Recreational
                                Activities</span>
                        </div>

                        <div class="bg-purple-50 border border-purple-100 rounded-xl p-6 mb-8">
                            <h4 class="font-bold text-purple-800 mb-2">Group Transportation Available</h4>
                            <p class="text-gray-600 text-sm">
                                Travel with friends or family members! Our larger vehicles can accommodate groups,
                                making social outings more affordable and enjoyable for everyone.
                            </p>
                        </div>

                        <a href="/booking?service=social"
                            class="btn-primary px-8 py-3 rounded-lg font-semibold inline-block">
                            <i class="fas fa-calendar-day mr-2"></i> Schedule Social Transport
                        </a>
                    </div>

                    <div>
                        <div class="bg-white rounded-xl shadow-lg p-8">
                            <h3 class="text-xl font-bold text-gray-800 mb-6">Service Highlights</h3>

                            <div class="space-y-4">
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <h4 class="font-bold text-gray-800">Extended Wait Times</h4>
                                    </div>
                                    <div class="accordion-content">
                                        <p class="text-gray-600 py-4 text-sm">
                                            We understand social events may run longer than expected. We offer flexible
                                            wait times for social transportation at reasonable rates.
                                        </p>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <h4 class="font-bold text-gray-800">Recurring Social Schedules</h4>
                                    </div>
                                    <div class="accordion-content">
                                        <p class="text-gray-600 py-4 text-sm">
                                            Set up regular weekly or monthly transportation for ongoing social
                                            activities, clubs, or religious services.
                                        </p>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <h4 class="font-bold text-gray-800">Event Transportation</h4>
                                    </div>
                                    <div class="accordion-content">
                                        <p class="text-gray-600 py-4 text-sm">
                                            Special arrangements for concerts, theater performances, sporting events,
                                            and other ticketed activities.
                                        </p>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <h4 class="font-bold text-gray-800">Companion Accommodation</h4>
                                    </div>
                                    <div class="accordion-content">
                                        <p class="text-gray-600 py-4 text-sm">
                                            Bring a companion or caregiver along at no additional charge (space
                                            permitting).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Services Brief -->
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-sm">
                    <div class="service-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Corporate Transport</h3>
                    <p class="text-gray-600 mb-6">
                        Professional transportation for business needs including meetings, airport transfers, and
                        workplace commuting.
                    </p>
                    <a href="/services/corporate" class="text-blue-700 font-semibold hover:text-blue-800">
                        Learn More <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-sm">
                    <div class="service-icon">
                        <i class="fas fa-glass-cheers"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Special Events</h3>
                    <p class="text-gray-600 mb-6">
                        Celebrate special occasions with accessible transportation for weddings, anniversaries, and
                        other important events.
                    </p>
                    <a href="/services/events" class="text-blue-700 font-semibold hover:text-blue-800">
                        Learn More <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-sm">
                    <div class="service-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Recurring Services</h3>
                    <p class="text-gray-600 mb-6">
                        Set up regular transportation schedules for work, appointments, or any recurring transportation
                        needs.
                    </p>
                    <a href="/services/recurring" class="text-blue-700 font-semibold hover:text-blue-800">
                        Learn More <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-800 mb-4">Service FAQs</h2>
                <div class="section-divider mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Common questions about our transportation services
                </p>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="space-y-4">
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h4 class="font-bold text-gray-800">How far in advance should I book?</h4>
                        </div>
                        <div class="accordion-content">
                            <p class="text-gray-600 py-4">
                                We recommend booking at least 24-48 hours in advance for standard service. For medical
                                appointments or special events, we suggest booking 3-7 days ahead. However, we do accept
                                same-day bookings based on availability.
                            </p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h4 class="font-bold text-gray-800">What payment methods do you accept?</h4>
                        </div>
                        <div class="accordion-content">
                            <p class="text-gray-600 py-4">
                                We accept cash, credit/debit cards, insurance payments, Medicare/Medicaid, and corporate
                                billing. Payment is typically collected at the time of service, unless other
                                arrangements have been made.
                            </p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h4 class="font-bold text-gray-800">Are your drivers trained in passenger assistance?</h4>
                        </div>
                        <div class="accordion-content">
                            <p class="text-gray-600 py-4">
                                Yes, all our drivers receive comprehensive training in passenger assistance techniques,
                                wheelchair securement, defensive driving, and customer service. Many have additional
                                training in medical awareness and emergency procedures.
                            </p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h4 class="font-bold text-gray-800">Do you provide service outside regular business hours?
                            </h4>
                        </div>
                        <div class="accordion-content">
                            <p class="text-gray-600 py-4">
                                Absolutely. We offer 24/7 service, including nights, weekends, and holidays. There may
                                be a slight surcharge for services outside regular hours, which will be communicated
                                when booking.
                            </p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header">
                            <h4 class="font-bold text-gray-800">Can I bring a companion or caregiver?</h4>
                        </div>
                        <div class="accordion-content">
                            <p class="text-gray-600 py-4">
                                Yes, companions and caregivers are welcome at no additional charge, space permitting.
                                Please let us know in advance so we can ensure adequate space is available.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-12 bg-blue-700 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="font-heading text-3xl md:text-4xl font-bold mb-6">Ready to Book Your Ride?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">
                Contact us today to schedule reliable, accessible transportation for any of our services.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/booking" class="btn-secondary px-8 py-4 rounded-lg font-semibold text-lg">
                    <i class="fas fa-calendar-alt mr-2"></i> Book Online Now
                </a>
                <a href="tel:+12535451994"
                    class="bg-white text-blue-700 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-phone-alt mr-2"></i> Call: +1(253) 5451994
                </a>
            </div>
            <p class="mt-6 text-blue-200">
                <i class="fas fa-info-circle mr-2"></i> Need help choosing the right service? Our team is happy to
                assist.
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-12 pb-8">
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

                <!-- Service Links -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Our Services</h4>
                    <ul class="space-y-3">
                        <li><a href="/services#medical"
                                class="text-gray-400 hover:text-white transition-colors">Medical Transportation</a>
                        </li>
                        <li><a href="/services#personal"
                                class="text-gray-400 hover:text-white transition-colors">Personal Errands</a></li>
                        <li><a href="/services#social" class="text-gray-400 hover:text-white transition-colors">Social
                                & Community</a></li>
                        <li><a href="/services/corporate"
                                class="text-gray-400 hover:text-white transition-colors">Corporate Transport</a></li>
                        <li><a href="/services/events"
                                class="text-gray-400 hover:text-white transition-colors">Special Events</a></li>
                    </ul>
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
                        <li><a href="/contact" class="text-gray-400 hover:text-white transition-colors">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Contact Info</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-phone text-blue-400 mt-1 mr-3"></i>
                            <a href="tel:+12535451994" class="text-gray-400 hover:text-white transition-colors">+1(253) 5451994</a>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope text-blue-400 mt-1 mr-3"></i>
                            <a href="mailto:info@rideaidellc.com"
                                class="text-gray-400 hover:text-white transition-colors">info@rideaidellc.com</a>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-blue-400 mt-1 mr-3"></i>
                            <span class="text-gray-400">Serving Seattle, WA</span>
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
