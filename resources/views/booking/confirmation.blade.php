<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Aide LLC | Professional ADA Transportation Services</title>
    <meta name="description"
        content="Ride Aide LLC provides reliable, professional ADA-compliant transportation services in the Seattle area. Medical transport, wheelchair accessibility, and comfortable rides.">

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
            background: linear-gradient(rgba(30, 64, 175, 0.9), rgba(59, 130, 246, 0.9));
            background-opacity: 0.6;
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

<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-xl shadow-lg p-8 text-center">
            <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            
            <h1 class="text-3xl font-bold text-gray-900 mb-4">Booking Confirmed!</h1>
            <p class="text-lg text-gray-600 mb-8">Thank you for your booking. We've received your request and will contact you shortly to confirm the details.</p>
            
            <div class="bg-blue-50 rounded-lg p-6 mb-8">
                <h2 class="text-xl font-semibold text-gray-900 mb-2">Your Booking Reference</h2>
                <div class="text-3xl font-bold text-blue-600 tracking-wider mb-4">
                    {{ session('booking_reference') }}
                </div>
                <p class="text-gray-600">Please keep this reference number for your records.</p>
            </div>
            
            <div class="space-y-4 text-left bg-gray-50 rounded-lg p-6 mb-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">What Happens Next?</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>Our team will review your booking within 24 hours</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>We'll contact you at your preferred method to confirm all details</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>You'll receive a final confirmation with driver details</span>
                    </li>
                </ul>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('booking.form') }}" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Make Another Booking
                </a>
                <a href="/" class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">
                    Return to Home
                </a>
            </div>
            
            <div class="mt-8 pt-8 border-t border-gray-200">
                <p class="text-gray-600">
                    Need immediate assistance? Call us at 
                    <span class="font-semibold">(123) 456-7890</span>
                </p>
            </div>
        </div>
    </div>
</div>

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
