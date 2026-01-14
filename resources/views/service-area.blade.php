<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Areas | Ride Aide LLC | ADA Transportation Coverage</title>
    <meta name="description"
        content="Ride Aide LLC serves the greater Seattle area including Seattle, Bellevue, Redmond, Kirkland, Renton, Federal Way, and surrounding communities. Check if we serve your location.">

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
    <!-- Leaflet CSS for Map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

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

        .areas-hero {
            background: linear-gradient(rgba(30, 64, 175, 0.9), rgba(59, 130, 246, 0.9)), url('https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
        }

        #serviceAreasMap {
            height: 500px;
            width: 100%;
            border-radius: 12px;
            z-index: 1;
        }

        .leaflet-popup-content {
            font-family: 'Roboto', sans-serif;
        }

        .area-card {
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }

        .area-card:hover {
            transform: translateY(-5px);
            border-left-color: var(--accent-orange);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .area-badge {
            display: inline-block;
            padding: 0.5rem 1.25rem;
            background-color: #dbeafe;
            color: var(--primary-blue);
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 600;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .area-badge.featured {
            background-color: #fef3c7;
            color: #92400e;
        }

        .coverage-zone {
            position: relative;
            padding-left: 2rem;
        }

        .coverage-zone::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0.5rem;
            width: 1rem;
            height: 1rem;
            border-radius: 50%;
        }

        .coverage-zone.primary::before {
            background-color: var(--primary-blue);
        }

        .coverage-zone.secondary::before {
            background-color: var(--secondary-teal);
        }

        .coverage-zone.extended::before {
            background-color: #9ca3af;
        }

        .zip-search-box {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
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

        .schedule-badge {
            background-color: #f0f9ff;
            border: 2px solid #dbeafe;
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
        }

        .area-detail-card {
            border-top: 4px solid var(--primary-blue);
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
        }

        @media (max-width: 768px) {
            #serviceAreasMap {
                height: 400px;
            }
        }

        /* Custom map marker styles */
        .custom-marker {
            background: var(--primary-blue);
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
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
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Service Areas</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="areas-hero text-white py-12 md:py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl">
                <h1 class="font-heading text-4xl md:text-5xl font-bold mb-6">Serving the Greater Seattle Area</h1>
                <p class="text-xl mb-8 opacity-90">
                    Ride Aide LLC provides comprehensive ADA-compliant transportation services throughout the Seattle
                    metropolitan area and surrounding communities.
                </p>
                <div class="flex flex-wrap gap-3 mb-6">
                    <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium">Seattle</span>
                    <span
                        class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium">Bellevue</span>
                    <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium">Redmond</span>
                    <span
                        class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium">Kirkland</span>
                    <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium">Renton</span>
                    <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium">Federal
                        Way</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Zip Code Checker -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="zip-search-box p-8 max-w-3xl mx-auto -mt-16 relative z-10">
                <h2 class="font-heading text-2xl md:text-3xl font-bold text-gray-800 mb-6 text-center">Check If We Serve
                    Your Area</h2>

                <div class="mb-8">
                    <div class="flex flex-col sm:flex-row gap-4">
                        <div class="flex-1">
                            <input type="text" id="zipCodeInput" placeholder="Enter your ZIP code (e.g., 98101)"
                                class="w-full px-6 py-4 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition"
                                maxlength="5">
                        </div>
                        <button id="checkZipBtn"
                            class="btn-primary px-8 py-4 rounded-lg font-semibold whitespace-nowrap">
                            Check Availability
                        </button>
                    </div>
                    <p class="text-gray-500 text-sm mt-3 text-center">
                        Enter your ZIP code to see if Ride Aide serves your location
                    </p>
                </div>

                <div id="zipResult" class="hidden">
                    <div class="p-6 rounded-lg border" id="resultContent">
                        <!-- Results will be inserted here by JavaScript -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Areas Map -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-800 mb-4">Our Service Area Map</h2>
                <div class="section-divider mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Interactive map showing our primary, secondary, and extended service areas in the Seattle region
                </p>
            </div>

            <div class="mb-8">
                <div id="serviceAreasMap"></div>
            </div>

            <div class="flex flex-wrap justify-center gap-6 mb-12">
                <div class="flex items-center">
                    <div class="w-4 h-4 rounded-full bg-blue-600 mr-3"></div>
                    <span class="text-gray-700">Primary Service Area</span>
                </div>
                <div class="flex items-center">
                    <div class="w-4 h-4 rounded-full bg-teal-500 mr-3"></div>
                    <span class="text-gray-700">Secondary Service Area</span>
                </div>
                <div class="flex items-center">
                    <div class="w-4 h-4 rounded-full bg-gray-400 mr-3"></div>
                    <span class="text-gray-700">Extended Service Area</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Coverage Zones -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-800 mb-4">Service Coverage Zones</h2>
                <div class="section-divider mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    We operate in three distinct service zones to ensure optimal coverage and response times
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="area-detail-card p-8">
                    <div class="mb-6">
                        <div
                            class="w-16 h-16 bg-blue-100 text-blue-700 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-map-marker-alt text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 text-center mb-2">Primary Zone</h3>
                        <p class="text-gray-600 text-center">Within 15 miles of downtown Seattle</p>
                    </div>
                    <div class="space-y-4">
                        <div class="coverage-zone primary">
                            <h4 class="font-bold text-gray-800 mb-1">Standard Service</h4>
                            <p class="text-gray-600 text-sm">Regular pricing, 15-30 minute pickup window</p>
                        </div>
                        <div class="coverage-zone primary">
                            <h4 class="font-bold text-gray-800 mb-1">Availability</h4>
                            <p class="text-gray-600 text-sm">24/7 service with frequent vehicle availability</p>
                        </div>
                        <div class="coverage-zone primary">
                            <h4 class="font-bold text-gray-800 mb-1">Response Time</h4>
                            <p class="text-gray-600 text-sm">Quickest response and highest priority</p>
                        </div>
                    </div>
                </div>

                <div class="area-detail-card p-8">
                    <div class="mb-6">
                        <div
                            class="w-16 h-16 bg-teal-100 text-teal-700 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-map-marker-alt text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 text-center mb-2">Secondary Zone</h3>
                        <p class="text-gray-600 text-center">15-25 miles from downtown Seattle</p>
                    </div>
                    <div class="space-y-4">
                        <div class="coverage-zone secondary">
                            <h4 class="font-bold text-gray-800 mb-1">Standard Service</h4>
                            <p class="text-gray-600 text-sm">Slightly adjusted pricing, 30-45 minute pickup window</p>
                        </div>
                        <div class="coverage-zone secondary">
                            <h4 class="font-bold text-gray-800 mb-1">Availability</h4>
                            <p class="text-gray-600 text-sm">Extended hours with good vehicle availability</p>
                        </div>
                        <div class="coverage-zone secondary">
                            <h4 class="font-bold text-gray-800 mb-1">Response Time</h4>
                            <p class="text-gray-600 text-sm">Good response time, slightly longer than primary zone</p>
                        </div>
                    </div>
                </div>

                <div class="area-detail-card p-8">
                    <div class="mb-6">
                        <div
                            class="w-16 h-16 bg-gray-100 text-gray-700 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-map-marker-alt text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 text-center mb-2">Extended Zone</h3>
                        <p class="text-gray-600 text-center">25-40 miles from downtown Seattle</p>
                    </div>
                    <div class="space-y-4">
                        <div class="coverage-zone extended">
                            <h4 class="font-bold text-gray-800 mb-1">Special Service</h4>
                            <p class="text-gray-600 text-sm">Custom pricing, 45-60 minute pickup window</p>
                        </div>
                        <div class="coverage-zone extended">
                            <h4 class="font-bold text-gray-800 mb-1">Availability</h4>
                            <p class="text-gray-600 text-sm">Scheduled service with advance booking recommended</p>
                        </div>
                        <div class="coverage-zone extended">
                            <h4 class="font-bold text-gray-800 mb-1">Response Time</h4>
                            <p class="text-gray-600 text-sm">Longer response time, schedule in advance for best service
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cities & Neighborhoods -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-800 mb-4">Cities & Neighborhoods We
                    Serve</h2>
                <div class="section-divider mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Comprehensive coverage across the greater Seattle metropolitan area
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <!-- Primary Cities -->
                <div class="bg-white rounded-xl shadow-sm p-8">
                    <div class="flex items-center mb-6">
                        <div
                            class="bg-blue-100 text-blue-700 w-12 h-12 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-city"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Primary Cities</h3>
                            <p class="text-gray-600 text-sm">Full service with frequent availability</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="area-card bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-bold text-gray-800 mb-2">Seattle</h4>
                            <div class="flex flex-wrap">
                                <span class="area-badge featured">Downtown</span>
                                <span class="area-badge">Capitol Hill</span>
                                <span class="area-badge">Queen Anne</span>
                                <span class="area-badge">Ballard</span>
                                <span class="area-badge">Fremont</span>
                                <span class="area-badge">Wallingford</span>
                                <span class="area-badge">University District</span>
                                <span class="area-badge">West Seattle</span>
                                <span class="area-badge">Rainier Valley</span>
                                <span class="area-badge">Northgate</span>
                            </div>
                        </div>

                        <div class="area-card bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-bold text-gray-800 mb-2">Bellevue</h4>
                            <div class="flex flex-wrap">
                                <span class="area-badge featured">Downtown</span>
                                <span class="area-badge">Crossroads</span>
                                <span class="area-badge">Factoria</span>
                                <span class="area-badge">Eastgate</span>
                            </div>
                        </div>

                        <div class="area-card bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-bold text-gray-800 mb-2">Redmond</h4>
                            <div class="flex flex-wrap">
                                <span class="area-badge featured">Downtown</span>
                                <span class="area-badge">Education Hill</span>
                                <span class="area-badge">Overlake</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Secondary Cities -->
                <div class="bg-white rounded-xl shadow-sm p-8">
                    <div class="flex items-center mb-6">
                        <div
                            class="bg-teal-100 text-teal-700 w-12 h-12 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-building"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Secondary Cities</h3>
                            <p class="text-gray-600 text-sm">Full service with good availability</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="area-card bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-bold text-gray-800 mb-2">Kirkland</h4>
                            <div class="flex flex-wrap">
                                <span class="area-badge">Downtown</span>
                                <span class="area-badge">Juanita</span>
                                <span class="area-badge">Totem Lake</span>
                            </div>
                        </div>

                        <div class="area-card bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-bold text-gray-800 mb-2">Renton</h4>
                            <div class="flex flex-wrap">
                                <span class="area-badge">Downtown</span>
                                <span class="area-badge">Highlands</span>
                                <span class="area-badge">Fairwood</span>
                            </div>
                        </div>

                        <div class="area-card bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-bold text-gray-800 mb-2">Federal Way</h4>
                            <div class="flex flex-wrap">
                                <span class="area-badge">Downtown</span>
                                <span class="area-badge">Redondo</span>
                                <span class="area-badge">Dash Point</span>
                            </div>
                        </div>

                        <div class="area-card bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-bold text-gray-800 mb-2">Shoreline</h4>
                            <div class="flex flex-wrap">
                                <span class="area-badge">Aurora Village</span>
                                <span class="area-badge">Richmond Beach</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Extended Areas -->
                <div class="bg-white rounded-xl shadow-sm p-8">
                    <div class="flex items-center mb-6">
                        <div
                            class="bg-gray-100 text-gray-700 w-12 h-12 rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-map"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Extended Areas</h3>
                            <p class="text-gray-600 text-sm">Service available with advance scheduling</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="area-card bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-bold text-gray-800 mb-2">North End</h4>
                            <div class="flex flex-wrap">
                                <span class="area-badge">Everett</span>
                                <span class="area-badge">Lynnwood</span>
                                <span class="area-badge">Mountlake Terrace</span>
                                <span class="area-badge">Bothell</span>
                            </div>
                        </div>

                        <div class="area-card bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-bold text-gray-800 mb-2">South End</h4>
                            <div class="flex flex-wrap">
                                <span class="area-badge">Tacoma</span>
                                <span class="area-badge">Auburn</span>
                                <span class="area-badge">Kent</span>
                                <span class="area-badge">Des Moines</span>
                            </div>
                        </div>

                        <div class="area-card bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-bold text-gray-800 mb-2">Eastside</h4>
                            <div class="flex flex-wrap">
                                <span class="area-badge">Sammamish</span>
                                <span class="area-badge">Issaquah</span>
                                <span class="area-badge">Newcastle</span>
                                <span class="area-badge">Mercer Island</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Medical Facilities Coverage -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-800 mb-4">Medical Facilities We Serve
                </h2>
                <div class="section-divider mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    We provide transportation to major medical centers and hospitals throughout our service area
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                <div class="schedule-badge">
                    <i class="fas fa-hospital text-blue-700 text-3xl mb-4"></i>
                    <h4 class="font-bold text-gray-800 mb-2">UW Medical Center</h4>
                    <p class="text-gray-600 text-sm">Montlake & Northwest campuses</p>
                </div>

                <div class="schedule-badge">
                    <i class="fas fa-clinic-medical text-blue-700 text-3xl mb-4"></i>
                    <h4 class="font-bold text-gray-800 mb-2">Swedish Medical Center</h4>
                    <p class="text-gray-600 text-sm">First Hill, Cherry Hill, Ballard</p>
                </div>

                <div class="schedule-badge">
                    <i class="fas fa-stethoscope text-blue-700 text-3xl mb-4"></i>
                    <h4 class="font-bold text-gray-800 mb-2">Virginia Mason</h4>
                    <p class="text-gray-600 text-sm">Downtown Seattle & Bailey-Boushay</p>
                </div>

                <div class="schedule-badge">
                    <i class="fas fa-hospital-alt text-blue-700 text-3xl mb-4"></i>
                    <h4 class="font-bold text-gray-800 mb-2">Overlake Medical Center</h4>
                    <p class="text-gray-600 text-sm">Bellevue</p>
                </div>

                <div class="schedule-badge">
                    <i class="fas fa-ambulance text-blue-700 text-3xl mb-4"></i>
                    <h4 class="font-bold text-gray-800 mb-2">EvergreenHealth</h4>
                    <p class="text-gray-600 text-sm">Kirkland & Redmond</p>
                </div>

                <div class="schedule-badge">
                    <i class="fas fa-heartbeat text-blue-700 text-3xl mb-4"></i>
                    <h4 class="font-bold text-gray-800 mb-2">MultiCare & Kaiser</h4>
                    <p class="text-gray-600 text-sm">All locations in service area</p>
                </div>
            </div>

            <div class="bg-blue-50 border border-blue-100 rounded-xl p-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-4 text-center">Dialysis & Specialized Care</h3>
                <p class="text-gray-600 text-center mb-6">
                    We provide regular transportation to dialysis centers, cancer treatment facilities, physical therapy
                    clinics, and specialized medical appointments throughout our service area.
                </p>
                <div class="flex flex-wrap justify-center gap-3">
                    <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium">Davita Dialysis
                        Centers</span>
                    <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium">Seattle Cancer
                        Care Alliance</span>
                    <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium">Polyclinic
                        Facilities</span>
                    <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium">Rehabilitation
                        Centers</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Schedule & Booking Info -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-800 mb-6">Scheduling in Your Area
                    </h2>
                    <div class="section-divider mb-6 ml-0"></div>

                    <div class="space-y-6 mb-8">
                        <div class="flex items-start">
                            <div
                                class="bg-green-100 text-green-700 w-10 h-10 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-1">Advance Booking Recommended</h4>
                                <p class="text-gray-600">For best availability, book 24-48 hours in advance. Same-day
                                    bookings accepted based on availability.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div
                                class="bg-green-100 text-green-700 w-10 h-10 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-1">Extended Area Scheduling</h4>
                                <p class="text-gray-600">For extended service areas, we recommend booking 3-7 days in
                                    advance to ensure vehicle availability.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div
                                class="bg-green-100 text-green-700 w-10 h-10 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-1">Recurring Rides</h4>
                                <p class="text-gray-600">Set up regular weekly or monthly transportation for consistent
                                    needs like medical appointments or work commutes.</p>
                            </div>
                        </div>
                    </div>

                    <a href="/booking" class="btn-primary px-8 py-4 rounded-lg font-semibold text-lg inline-block">
                        <i class="fas fa-calendar-check mr-2"></i> Schedule a Ride Now
                    </a>
                </div>

                <div>
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Not Sure If We Serve Your Area?</h3>

                        <div class="space-y-6">
                            <div class="border-l-4 border-blue-500 pl-4 py-2">
                                <h4 class="font-bold text-gray-800 mb-1">Call Our Dispatch</h4>
                                <p class="text-gray-600 text-sm">Our team can quickly check if we serve your specific
                                    location.</p>
                                <a href="tel:+12065551234" class="text-blue-700 font-semibold hover:text-blue-800">
                                    <i class="fas fa-phone-alt mr-2"></i> (206) 555-1234
                                </a>
                            </div>

                            <div class="border-l-4 border-teal-500 pl-4 py-2">
                                <h4 class="font-bold text-gray-800 mb-1">Email Us</h4>
                                <p class="text-gray-600 text-sm">Send us your address and we'll confirm service
                                    availability.</p>
                                <a href="mailto:info@rideaidellc.com"
                                    class="text-blue-700 font-semibold hover:text-blue-800">
                                    <i class="fas fa-envelope mr-2"></i> info@rideaidellc.com
                                </a>
                            </div>

                            <div class="border-l-4 border-orange-500 pl-4 py-2">
                                <h4 class="font-bold text-gray-800 mb-1">Special Requests</h4>
                                <p class="text-gray-600 text-sm">Need service outside our regular areas? Contact us for
                                    special arrangements.</p>
                                <a href="/contact" class="text-blue-700 font-semibold hover:text-blue-800">
                                    <i class="fas fa-comment-alt mr-2"></i> Contact Form
                                </a>
                            </div>
                        </div>

                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <h4 class="font-bold text-gray-800 mb-3">Service Expansion</h4>
                            <p class="text-gray-600 text-sm">
                                We're continuously expanding our service areas. If we don't currently serve your
                                location, let us know! We use customer requests to prioritize new service area
                                expansions.
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
            <p class="text-xl mb-8 opacity-90 max-w-2xl mx-auto">
                Whether you're in downtown Seattle or the surrounding communities, Ride Aide is here to provide
                reliable, accessible transportation.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/booking" class="btn-secondary px-8 py-4 rounded-lg font-semibold text-lg">
                    <i class="fas fa-calendar-alt mr-2"></i> Book Online Now
                </a>
                <a href="tel:+12065551234"
                    class="bg-white text-blue-700 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-phone-alt mr-2"></i> Call Dispatch: (206) 555-1234
                </a>
            </div>
            <p class="mt-6 text-blue-200">
                <i class="fas fa-info-circle mr-2"></i> Questions about service in your specific area? Our team is
                happy to help.
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
                        Serving the greater Seattle area with reliable, accessible transportation since 2015.
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

                <!-- Service Areas -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Primary Service Areas</h4>
                    <ul class="space-y-2">
                        <li><span class="text-gray-400">Seattle & Surrounding</span></li>
                        <li><span class="text-gray-400">Bellevue</span></li>
                        <li><span class="text-gray-400">Redmond</span></li>
                        <li><span class="text-gray-400">Kirkland</span></li>
                        <li><span class="text-gray-400">Renton</span></li>
                        <li><span class="text-gray-400">Federal Way</span></li>
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
                        <li><a href="/areas" class="text-gray-400 hover:text-white transition-colors">Service
                                Areas</a></li>
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
                            <a href="tel:+12065551234" class="text-gray-400 hover:text-white transition-colors">(206)
                                555-1234</a>
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

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

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

        // ZIP Code Validation and Check
        const zipCodeInput = document.getElementById('zipCodeInput');
        const checkZipBtn = document.getElementById('checkZipBtn');
        const zipResult = document.getElementById('zipResult');
        const resultContent = document.getElementById('resultContent');

        // Define service areas by ZIP code
        const serviceAreas = {
            // Primary Zone ZIPs (Seattle, Bellevue, Redmond core)
            primary: [
                '98101', '98102', '98103', '98104', '98105', '98106', '98107', '98108', '98109',
                '98112', '98115', '98116', '98117', '98118', '98119', '98121', '98122', '98125',
                '98126', '98133', '98136', '98144', '98177', '98178', '98199', // Seattle
                '98004', '98005', '98006', '98007', '98008', // Bellevue
                '98052', '98053', // Redmond
            ],
            // Secondary Zone ZIPs
            secondary: [
                '98033', '98034', '98074', // Kirkland
                '98056', '98057', '98058', '98059', // Renton
                '98003', '98023', '98063', // Federal Way
                '98155', '98166', '98168', '98188', // Shoreline/SeaTac
                '98029', // Issaquah
            ],
            // Extended Zone ZIPs
            extended: [
                '98011', '98075', // Bothell
                '98022', '98024', // Enumclaw, Fall City
                '98027', // Issaquah/Sammamish
                '98028', // Kenmore
                '98031', '98032', // Kent
                '98038', // Maple Valley
                '98040', // Mercer Island
                '98042', // Auburn
                '98055', // Renton Highlands
                '98070', // Vashon
                '98092', // Auburn
                '98146', '98148', '98168', // Burien/Tukwila
                '98166', // SeaTac
                '98178', // Rainier Beach
                '98188', // SeaTac
                '98198', // Des Moines
            ]
        };

        // Define area names for display
        const areaNames = {
            '98101': 'Downtown Seattle',
            '98004': 'Downtown Bellevue',
            '98052': 'Downtown Redmond',
            '98033': 'Kirkland',
            '98056': 'Renton',
            '98003': 'Federal Way',
            '98155': 'Shoreline',
            '98011': 'Bothell',
            '98031': 'Kent',
            '98042': 'Auburn',
        };

        // Check ZIP code function
        function checkZipCode(zip) {
            zip = zip.trim();

            // Validate ZIP format
            if (!/^\d{5}$/.test(zip)) {
                return {
                    valid: false,
                    message: 'Please enter a valid 5-digit ZIP code.'
                };
            }

            // Check which zone the ZIP belongs to
            if (serviceAreas.primary.includes(zip)) {
                return {
                    valid: true,
                    zone: 'primary',
                    areaName: areaNames[zip] || 'Primary Service Area',
                    message: `Great news! We provide full service in ${areaNames[zip] || 'your area'}.`
                };
            } else if (serviceAreas.secondary.includes(zip)) {
                return {
                    valid: true,
                    zone: 'secondary',
                    areaName: areaNames[zip] || 'Secondary Service Area',
                    message: `Yes! We serve ${areaNames[zip] || 'your area'} with full transportation services.`
                };
            } else if (serviceAreas.extended.includes(zip)) {
                return {
                    valid: true,
                    zone: 'extended',
                    areaName: areaNames[zip] || 'Extended Service Area',
                    message: `We provide service to ${areaNames[zip] || 'your area'} with advance scheduling.`
                };
            } else {
                return {
                    valid: true,
                    zone: 'outside',
                    areaName: 'Outside Service Area',
                    message: 'We currently don\'t serve this ZIP code, but we\'re expanding! Contact us for special arrangements.'
                };
            }
        }

        // Display result function
        function displayResult(result) {
            let icon, color, zoneName;

            switch (result.zone) {
                case 'primary':
                    icon = 'fa-check-circle';
                    color = 'text-green-600';
                    zoneName = 'Primary Service Zone';
                    break;
                case 'secondary':
                    icon = 'fa-check-circle';
                    color = 'text-teal-600';
                    zoneName = 'Secondary Service Zone';
                    break;
                case 'extended':
                    icon = 'fa-info-circle';
                    color = 'text-blue-600';
                    zoneName = 'Extended Service Zone';
                    break;
                default:
                    icon = 'fa-exclamation-circle';
                    color = 'text-orange-600';
                    zoneName = 'Outside Service Area';
            }

            resultContent.innerHTML = `
                <div class="flex items-start">
                    <div class="${color} text-2xl mr-4">
                        <i class="fas ${icon}"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-gray-800 mb-2">${zoneName}</h4>
                        <p class="text-gray-600 mb-4">${result.message}</p>
                        <div class="flex flex-wrap gap-3">
                            <a href="/booking" class="btn-primary px-6 py-2 rounded-lg font-semibold text-sm">
                                <i class="fas fa-calendar-check mr-2"></i> Book Now
                            </a>
                            <a href="/contact" class="bg-gray-100 text-gray-800 px-6 py-2 rounded-lg font-semibold text-sm hover:bg-gray-200 transition-colors">
                                <i class="fas fa-question-circle mr-2"></i> Ask About Service
                            </a>
                        </div>
                    </div>
                </div>
            `;

            zipResult.classList.remove('hidden');

            // Scroll to result
            zipResult.scrollIntoView({
                behavior: 'smooth',
                block: 'nearest'
            });
        }

        // Event listener for ZIP check button
        checkZipBtn.addEventListener('click', () => {
            const zip = zipCodeInput.value;
            const result = checkZipCode(zip);

            if (result.valid) {
                displayResult(result);
            } else {
                alert(result.message);
                zipCodeInput.focus();
            }
        });

        // Allow Enter key to trigger check
        zipCodeInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                checkZipBtn.click();
            }
        });

        // Initialize Map
        function initMap() {
            // Seattle coordinates
            const seattleCoords = [47.6062, -122.3321];

            // Create map
            const map = L.map('serviceAreasMap').setView(seattleCoords, 10);

            // Add tile layer
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // Define service area polygons (simplified for demo)
            // Primary zone (Seattle + Bellevue + Redmond core)
            const primaryZone = L.polygon([
                [47.6205, -122.3493], // Downtown Seattle
                [47.6132, -122.2010], // Bellevue
                [47.6740, -122.1215], // Redmond
                [47.7322, -122.3000], // North Seattle
                [47.5200, -122.2800], // South Seattle
            ], {
                color: '#1e40af',
                fillColor: '#1e40af',
                fillOpacity: 0.2,
                weight: 2
            }).addTo(map);

            primaryZone.bindPopup('<b>Primary Service Zone</b><br>Full service with frequent availability');

            // Secondary zone (surrounding cities)
            const secondaryZone = L.polygon([
                [47.7322, -122.3000], // North
                [47.6740, -122.1215], // East
                [47.3500, -122.0000], // Southeast
                [47.3000, -122.3500], // Southwest
                [47.4000, -122.4000], // West
            ], {
                color: '#0d9488',
                fillColor: '#0d9488',
                fillOpacity: 0.15,
                weight: 2
            }).addTo(map);

            secondaryZone.bindPopup('<b>Secondary Service Zone</b><br>Full service with good availability');

            // Extended zone
            const extendedZone = L.polygon([
                [47.8000, -122.4000], // North
                [47.8000, -121.8000], // Northeast
                [47.1000, -121.8000], // Southeast
                [47.1000, -122.6000], // Southwest
                [47.3000, -122.6000], // West
            ], {
                color: '#9ca3af',
                fillColor: '#9ca3af',
                fillOpacity: 0.1,
                weight: 2
            }).addTo(map);

            extendedZone.bindPopup('<b>Extended Service Zone</b><br>Service available with advance scheduling');

            // Add markers for key cities
            const cities = [{
                    name: 'Seattle',
                    coords: [47.6062, -122.3321],
                    type: 'primary'
                },
                {
                    name: 'Bellevue',
                    coords: [47.6132, -122.2010],
                    type: 'primary'
                },
                {
                    name: 'Redmond',
                    coords: [47.6740, -122.1215],
                    type: 'primary'
                },
                {
                    name: 'Kirkland',
                    coords: [47.6815, -122.2087],
                    type: 'secondary'
                },
                {
                    name: 'Renton',
                    coords: [47.4829, -122.2171],
                    type: 'secondary'
                },
                {
                    name: 'Federal Way',
                    coords: [47.3139, -122.3393],
                    type: 'secondary'
                },
                {
                    name: 'Shoreline',
                    coords: [47.7563, -122.3415],
                    type: 'secondary'
                },
                {
                    name: 'Bothell',
                    coords: [47.7597, -122.1919],
                    type: 'extended'
                },
                {
                    name: 'Kent',
                    coords: [47.3809, -122.2348],
                    type: 'extended'
                },
                {
                    name: 'Auburn',
                    coords: [47.3073, -122.2285],
                    type: 'extended'
                },
            ];

            cities.forEach(city => {
                let markerColor;
                switch (city.type) {
                    case 'primary':
                        markerColor = '#1e40af';
                        break;
                    case 'secondary':
                        markerColor = '#0d9488';
                        break;
                    case 'extended':
                        markerColor = '#6b7280';
                        break;
                }

                const marker = L.circleMarker(city.coords, {
                    radius: 8,
                    fillColor: markerColor,
                    color: '#fff',
                    weight: 2,
                    opacity: 1,
                    fillOpacity: 0.8
                }).addTo(map);

                marker.bindPopup(
                    `<b>${city.name}</b><br>${city.type.charAt(0).toUpperCase() + city.type.slice(1)} Service Zone`
                    );
            });

            // Add medical facility markers
            const medicalFacilities = [{
                    name: 'UW Medical Center',
                    coords: [47.6499, -122.3040]
                },
                {
                    name: 'Swedish First Hill',
                    coords: [47.6092, -122.3210]
                },
                {
                    name: 'Virginia Mason',
                    coords: [47.6095, -122.3330]
                },
                {
                    name: 'Overlake Medical',
                    coords: [47.6275, -122.1713]
                },
                {
                    name: 'EvergreenHealth',
                    coords: [47.7173, -122.1767]
                },
            ];

            medicalFacilities.forEach(facility => {
                L.marker(facility.coords, {
                    icon: L.divIcon({
                        html: `<div class="custom-marker"><i class="fas fa-hospital"></i></div>`,
                        iconSize: [30, 30],
                        className: 'custom-div-icon'
                    })
                }).addTo(map).bindPopup(`<b>${facility.name}</b><br>Medical facility we serve`);
            });
        }

        // Initialize map when page loads
        document.addEventListener('DOMContentLoaded', initMap);

        // Area card hover effects
        document.querySelectorAll('.area-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.boxShadow = '0 10px 25px rgba(0, 0, 0, 0.1)';
                this.style.borderLeftColor = '#f97316';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '';
                this.style.borderLeftColor = 'transparent';
            });
        });
    </script>
</body>

</html>
