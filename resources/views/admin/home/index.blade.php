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
                            <a href="tel:+12535451994" class="text-gray-400 hover:text-white transition-colors">+1(253) 5451994</a>
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
