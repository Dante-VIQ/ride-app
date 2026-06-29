<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Ride Aide LLC | Professional ADA Transportation</title>
    <meta name="description" content="Learn about Ride Aide LLC's commitment to providing reliable, accessible transportation services. Our mission, values, team, and dedication to the community.">
    
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    
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
        
        .about-hero {
            background: linear-gradient(rgba(30, 64, 175, 0.85), rgba(59, 130, 246, 0.85)), url('https://images.unsplash.com/photo-1579532537598-459ecdaf39cc?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
        }
        
        .mission-card {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-teal) 100%);
            color: white;
            border-radius: 20px;
            overflow: hidden;
        }
        
        .value-card {
            transition: all 0.3s ease;
            border-top: 4px solid transparent;
        }
        
        .value-card:hover {
            transform: translateY(-5px);
            border-top-color: var(--accent-orange);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .team-card {
            transition: all 0.3s ease;
            border-bottom: 3px solid transparent;
        }
        
        .team-card:hover {
            transform: translateY(-5px);
            border-bottom-color: var(--primary-blue);
        }
        
        .timeline-item {
            position: relative;
            padding-left: 30px;
            margin-bottom: 30px;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 12px;
            height: 12px;
            background-color: var(--primary-blue);
            border-radius: 50%;
        }
        
        .timeline-item::after {
            content: '';
            position: absolute;
            left: 5px;
            top: 12px;
            width: 2px;
            height: calc(100% + 18px);
            background-color: #e5e7eb;
        }
        
        .timeline-item:last-child::after {
            display: none;
        }
        
        .certification-badge {
            background-color: #f0f9ff;
            border: 2px solid #dbeafe;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
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
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-blue);
        }
        
        .community-impact {
            background: linear-gradient(135deg, #1e40af 0%, #0d9488 100%);
            color: white;
            border-radius: 20px;
        }
        
        .impact-icon {
            width: 60px;
            height: 60px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin: 0 auto 1rem;
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
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">About Us</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="about-hero text-white py-16 md:py-24">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl">
                <h1 class="font-heading text-4xl md:text-5xl font-bold mb-6">Our Story: Making Transportation Accessible for Everyone</h1>
                <p class="text-xl mb-8 opacity-90">
                    Founded on the principle that everyone deserves safe, reliable, and dignified transportation, Ride Aide LLC has been serving the Seattle community with compassion and professionalism since 2015.
                </p>
                <a href="#mission" class="inline-flex items-center text-white font-semibold hover:text-blue-200">
                    <span>Discover Our Mission</span>
                    <i class="fas fa-arrow-down ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section id="mission" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <div>
                    <h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-800 mb-6">Our Mission & Vision</h2>
                    <div class="section-divider mb-6 ml-0"></div>
                    
                    <div class="mission-card p-8 mb-8">
                        <h3 class="text-2xl font-bold mb-4">Our Mission</h3>
                        <p class="mb-6 opacity-90">
                            To provide reliable, accessible, and compassionate transportation services that empower individuals with disabilities and mobility challenges to live independently and participate fully in their communities.
                        </p>
                        <div class="flex items-center">
                            <i class="fas fa-bullseye text-xl mr-3"></i>
                            <span class="font-semibold">Driving independence, one ride at a time</span>
                        </div>
                    </div>
                    
                    <div class="bg-gray-50 border border-gray-200 rounded-xl p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Our Vision</h3>
                        <p class="text-gray-600 mb-6">
                            To become the leading provider of accessible transportation in the Pacific Northwest, setting the standard for safety, reliability, and exceptional customer service while expanding access to underserved communities.
                        </p>
                        <div class="flex items-center text-blue-700">
                            <i class="fas fa-eye mr-3"></i>
                            <span class="font-semibold">A future where transportation is never a barrier</span>
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="bg-gray-50 rounded-xl p-8 mb-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Our Core Values</h3>
                        
                        <div class="space-y-6">
                            <div class="value-card bg-white p-6 rounded-lg shadow-sm">
                                <div class="flex items-start mb-4">
                                    <div class="bg-blue-100 text-blue-700 w-12 h-12 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-800 mb-2">Safety First</h4>
                                        <p class="text-gray-600">We prioritize the safety of our passengers above all else, with rigorous vehicle maintenance and driver training.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="value-card bg-white p-6 rounded-lg shadow-sm">
                                <div class="flex items-start mb-4">
                                    <div class="bg-blue-100 text-blue-700 w-12 h-12 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-800 mb-2">Compassionate Service</h4>
                                        <p class="text-gray-600">We treat every passenger with dignity, respect, and understanding of their unique transportation needs.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="value-card bg-white p-6 rounded-lg shadow-sm">
                                <div class="flex items-start mb-4">
                                    <div class="bg-blue-100 text-blue-700 w-12 h-12 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-800 mb-2">Reliability</h4>
                                        <p class="text-gray-600">We understand that our passengers depend on us, and we commit to being there when they need us most.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="value-card bg-white p-6 rounded-lg shadow-sm">
                                <div class="flex items-start mb-4">
                                    <div class="bg-blue-100 text-blue-700 w-12 h-12 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-800 mb-2">Community Focus</h4>
                                        <p class="text-gray-600">We are committed to serving our local community and making transportation accessible to all.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Story -->
    {{-- <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-800 mb-4">Our Journey</h2>
                <div class="section-divider mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    From humble beginnings to becoming a trusted transportation provider in Seattle
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="bg-white rounded-xl shadow-lg p-8">
                            <h3 class="text-2xl font-bold text-gray-800 mb-6">How It All Began</h3>
                            <p class="text-gray-600 mb-6">
                                Ride Aide LLC was founded in 2015 by Michael Rodriguez, who saw firsthand the transportation challenges faced by his grandmother after she began using a wheelchair. What started as a single wheelchair-accessible van and a commitment to helping one person has grown into a fleet of vehicles serving hundreds of clients throughout the Seattle area.
                            </p>
                            <p class="text-gray-600">
                                Our founder's personal experience with accessibility challenges inspired a business built on empathy, understanding, and a genuine desire to make a difference in people's lives.
                            </p>
                        </div>
                    </div>
                    
                    <div>
                        <div class="relative">
                            <div class="bg-blue-700 rounded-xl p-8 text-white">
                                <h3 class="text-2xl font-bold mb-6">Our Growth Timeline</h3>
                                
                                <div class="space-y-8">
                                    <div class="timeline-item">
                                        <div class="bg-white text-gray-800 p-4 rounded-lg shadow-sm">
                                            <h4 class="font-bold text-blue-700 mb-2">2015</h4>
                                            <p class="text-sm">Company founded with one wheelchair-accessible van</p>
                                        </div>
                                    </div>
                                    
                                    <div class="timeline-item">
                                        <div class="bg-white text-gray-800 p-4 rounded-lg shadow-sm">
                                            <h4 class="font-bold text-blue-700 mb-2">2017</h4>
                                            <p class="text-sm">Expanded fleet to 3 vehicles and hired 5 additional drivers</p>
                                        </div>
                                    </div>
                                    
                                    <div class="timeline-item">
                                        <div class="bg-white text-gray-800 p-4 rounded-lg shadow-sm">
                                            <h4 class="font-bold text-blue-700 mb-2">2019</h4>
                                            <p class="text-sm">Became certified Medicaid/Medicare provider</p>
                                        </div>
                                    </div>
                                    
                                    <div class="timeline-item">
                                        <div class="bg-white text-gray-800 p-4 rounded-lg shadow-sm">
                                            <h4 class="font-bold text-blue-700 mb-2">2022</h4>
                                            <p class="text-sm">Expanded service area to cover entire Seattle metro region</p>
                                        </div>
                                    </div>
                                    
                                    <div class="timeline-item">
                                        <div class="bg-white text-gray-800 p-4 rounded-lg shadow-sm">
                                            <h4 class="font-bold text-blue-700 mb-2">2024</h4>
                                            <p class="text-sm">Served over 5,000 clients and completed 50,000+ rides</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Meet Our Team -->
    {{-- <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-800 mb-4">Meet Our Team</h2>
                <div class="section-divider mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Dedicated professionals committed to providing exceptional accessible transportation
                </p>
            </div>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="team-card bg-gray-50 rounded-xl p-8 text-center">
                    <div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden border-4 border-white shadow-md">
                        <div class="w-full h-full bg-blue-700 flex items-center justify-center text-white text-4xl">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Michael Rodriguez</h3>
                    <p class="text-blue-700 font-semibold mb-4">Founder & CEO</p>
                    <p class="text-gray-600 text-sm mb-6">
                        With over 15 years in transportation and a personal connection to accessibility needs, Michael leads with compassion and innovation.
                    </p>
                    <div class="text-blue-700">
                        <i class="fas fa-quote-left mr-2"></i>
                        <span class="text-sm italic">"Every ride is an opportunity to make someone's day better."</span>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="team-card bg-gray-50 rounded-xl p-8 text-center">
                    <div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden border-4 border-white shadow-md">
                        <div class="w-full h-full bg-blue-700 flex items-center justify-center text-white text-4xl">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Sarah Johnson</h3>
                    <p class="text-blue-700 font-semibold mb-4">Operations Director</p>
                    <p class="text-gray-600 text-sm mb-6">
                        10+ years in logistics and transportation management, ensuring efficient operations and exceptional service delivery.
                    </p>
                    <div class="text-blue-700">
                        <i class="fas fa-quote-left mr-2"></i>
                        <span class="text-sm italic">"Precision in planning means reliability in service."</span>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="team-card bg-gray-50 rounded-xl p-8 text-center">
                    <div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden border-4 border-white shadow-md">
                        <div class="w-full h-full bg-blue-700 flex items-center justify-center text-white text-4xl">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">David Chen</h3>
                    <p class="text-blue-700 font-semibold mb-4">Safety & Training Manager</p>
                    <p class="text-gray-600 text-sm mb-6">
                        Former EMT with 12 years experience, responsible for driver training, safety protocols, and ADA compliance.
                    </p>
                    <div class="text-blue-700">
                        <i class="fas fa-quote-left mr-2"></i>
                        <span class="text-sm italic">"Safety isn't just a policy—it's our promise to every passenger."</span>
                    </div>
                </div>
                
                <!-- Team Member 4 -->
                <div class="team-card bg-gray-50 rounded-xl p-8 text-center">
                    <div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden border-4 border-white shadow-md">
                        <div class="w-full h-full bg-blue-700 flex items-center justify-center text-white text-4xl">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Maria Gonzalez</h3>
                    <p class="text-blue-700 font-semibold mb-4">Customer Relations</p>
                    <p class="text-gray-600 text-sm mb-6">
                        Dedicated to ensuring every client has a positive experience from booking to arrival at their destination.
                    </p>
                    <div class="text-blue-700">
                        <i class="fas fa-quote-left mr-2"></i>
                        <span class="text-sm italic">"Listening to our clients helps us serve them better every day."</span>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <p class="text-gray-600 mb-6">
                    Along with our dedicated office staff, we have a team of 25+ professional drivers who are the heart of our operation. Each driver undergoes rigorous training in:
                </p>
                <div class="flex flex-wrap justify-center gap-3">
                    <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium">ADA Compliance</span>
                    <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium">Defensive Driving</span>
                    <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium">Passenger Assistance</span>
                    <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium">Emergency Procedures</span>
                    <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium">Customer Service</span>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Certifications & Accreditations -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-800 mb-4">Certifications & Accreditations</h2>
                <div class="section-divider mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Our commitment to quality, safety, and compliance
                </p>
            </div>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <div class="certification-badge">
                    <div class="text-blue-700 text-3xl mb-4">
                        <i class="fas fa-award"></i>
                    </div>
                    <h4 class="font-bold text-gray-800 mb-2">ADA Compliant</h4>
                    <p class="text-gray-600 text-sm">Fully compliant with Americans with Disabilities Act standards</p>
                </div>
                
                <div class="certification-badge">
                    <div class="text-blue-700 text-3xl mb-4">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4 class="font-bold text-gray-800 mb-2">Fully Insured</h4>
                    <p class="text-gray-600 text-sm">Commercial insurance exceeding state requirements</p>
                </div>
                
                <div class="certification-badge">
                    <div class="text-blue-700 text-3xl mb-4">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h4 class="font-bold text-gray-800 mb-2">Medicaid/Medicare Certified</h4>
                    <p class="text-gray-600 text-sm">Authorized provider for government insurance programs</p>
                </div>
                
                <div class="certification-badge">
                    <div class="text-blue-700 text-3xl mb-4">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h4 class="font-bold text-gray-800 mb-2">Licensed & Bonded</h4>
                    <p class="text-gray-600 text-sm">Fully licensed by Washington State Department of Transportation</p>
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-lg p-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Our Safety Commitment</h3>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="impact-icon">
                            <i class="fas fa-car-crash"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Vehicle Safety</h4>
                        <p class="text-gray-600 text-sm">All vehicles undergo daily safety inspections and regular maintenance</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="impact-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Driver Training</h4>
                        <p class="text-gray-600 text-sm">Comprehensive training programs updated annually</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="impact-icon">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Compliance Audits</h4>
                        <p class="text-gray-600 text-sm">Regular audits to ensure adherence to all regulations</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Impact -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-800 mb-4">Community Impact</h2>
                <div class="section-divider mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Making a difference beyond transportation
                </p>
            </div>
            
            <div class="community-impact p-8 md:p-12 mb-12">
                <div class="max-w-3xl mx-auto text-center">
                    <h3 class="text-2xl md:text-3xl font-bold mb-6">Giving Back to Our Community</h3>
                    <p class="mb-8 opacity-90">
                        At Ride Aide LLC, we believe in being more than just a transportation service. We're committed to supporting the communities we serve through partnerships, volunteer work, and special programs.
                    </p>
                    
                    <div class="grid sm:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold mb-2">15+</div>
                            <p class="text-sm opacity-90">Community Partnerships</p>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold mb-2">200+</div>
                            <p class="text-sm opacity-90">Volunteer Hours Annually</p>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold mb-2">5</div>
                            <p class="text-sm opacity-90">Annual Community Events</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gray-50 rounded-xl p-6">
                    <h4 class="font-bold text-gray-800 mb-3">Senior Center Partnerships</h4>
                    <p class="text-gray-600 text-sm">Discounted transportation services for local senior centers</p>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6">
                    <h4 class="font-bold text-gray-800 mb-3">Medical Clinic Support</h4>
                    <p class="text-gray-600 text-sm">Collaboration with clinics serving low-income communities</p>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6">
                    <h4 class="font-bold text-gray-800 mb-3">Disability Advocacy</h4>
                    <p class="text-gray-600 text-sm">Active participation in accessibility advocacy groups</p>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-6">
                    <h4 class="font-bold text-gray-800 mb-3">Educational Programs</h4>
                    <p class="text-gray-600 text-sm">Transportation safety workshops for community groups</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics -->
    <section class="py-16 bg-blue-700 text-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-heading text-3xl md:text-4xl font-bold mb-4">By The Numbers</h2>
                <div class="section-divider mb-4 bg-white"></div>
                <p class="text-xl opacity-90 max-w-2xl mx-auto">
                    The impact we've made through years of dedicated service
                </p>
            </div>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold mb-2">50,000+</div>
                    <p class="text-blue-200">Rides Completed</p>
                </div>
                
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold mb-2">5,000+</div>
                    <p class="text-blue-200">Clients Served</p>
                </div>
                
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold mb-2">98%</div>
                    <p class="text-blue-200">On-Time Rate</p>
                </div>
                
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold mb-2">9</div>
                    <p class="text-blue-200">Years of Service</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-800 mb-6">Join Our Community of Satisfied Clients</h2>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                Experience the Ride Aide difference—professional, reliable, and compassionate transportation you can count on.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/booking" class="btn-primary px-8 py-4 rounded-lg font-semibold text-lg">
                    <i class="fas fa-calendar-check mr-2"></i> Book Your First Ride
                </a>
                <a href="/contact" class="btn-secondary px-8 py-4 rounded-lg font-semibold text-lg">
                    <i class="fas fa-envelope mr-2"></i> Contact Us
                </a>
            </div>
            <p class="mt-6 text-gray-500">
                Have questions about our services or want to learn more? Our team is here to help.
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
                
                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="/" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
                        <li><a href="/services" class="text-gray-400 hover:text-white transition-colors">Services</a></li>
                        <li><a href="/about" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="/fleet" class="text-gray-400 hover:text-white transition-colors">Our Fleet</a></li>
                        <li><a href="/contact" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Services -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Our Services</h4>
                    <ul class="space-y-3">
                        <li><a href="/services#medical" class="text-gray-400 hover:text-white transition-colors">Medical Transportation</a></li>
                        <li><a href="/services#personal" class="text-gray-400 hover:text-white transition-colors">Personal Errands</a></li>
                        <li><a href="/services#social" class="text-gray-400 hover:text-white transition-colors">Social & Community</a></li>
                        <li><a href="/services/corporate" class="text-gray-400 hover:text-white transition-colors">Corporate Transport</a></li>
                        <li><a href="/services/events" class="text-gray-400 hover:text-white transition-colors">Special Events</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Contact Info</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-phone text-blue-400 mt-1 mr-3"></i>
                            <a href="tel:+12065551234" class="text-gray-400 hover:text-white transition-colors">(206) 555-1234</a>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope text-blue-400 mt-1 mr-3"></i>
                            <a href="mailto:info@rideaidellc.com" class="text-gray-400 hover:text-white transition-colors">info@rideaidellc.com</a>
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
                        <a href="/privacy" class="text-gray-500 hover:text-white text-sm transition-colors">Privacy Policy</a>
                        <a href="/terms" class="text-gray-500 hover:text-white text-sm transition-colors">Terms of Service</a>
                        <a href="/accessibility" class="text-gray-500 hover:text-white text-sm transition-colors">Accessibility Statement</a>
                        <a href="/ada-compliance" class="text-gray-500 hover:text-white text-sm transition-colors">ADA Compliance</a>
                    </div>
                </div>
                <p class="text-gray-600 text-xs text-center mt-4">
                    Ride Aide LLC is committed to providing equal access transportation services in compliance with ADA regulations.
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
                }
            });
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
        
        // Add scroll effect to header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('shadow-lg');
            } else {
                header.classList.remove('shadow-lg');
            }
        });
        
        // Team card hover effect
        document.querySelectorAll('.team-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.boxShadow = '0 10px 25px rgba(0, 0, 0, 0.1)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '';
            });
        });
        
        // Value card hover effect
        document.querySelectorAll('.value-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.boxShadow = '0 15px 30px rgba(0, 0, 0, 0.1)';
                this.style.borderTopColor = '#f97316';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '';
                this.style.borderTopColor = 'transparent';
            });
        });
    </script>
</body>
</html>