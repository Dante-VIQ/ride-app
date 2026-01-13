<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Ride Aide LLC | Get in Touch for ADA Transportation</title>
    <meta name="description" content="Contact Ride Aide LLC for ADA transportation services. Call, email, or visit our contact page to schedule rides, ask questions, or get transportation assistance in Seattle.">
    
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
        
        .contact-hero {
            background: linear-gradient(rgba(30, 64, 175, 0.9), rgba(59, 130, 246, 0.9)), url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
        }
        
        .contact-card {
            transition: all 0.3s ease;
            border-top: 4px solid transparent;
        }
        
        .contact-card:hover {
            transform: translateY(-5px);
            border-top-color: var(--accent-orange);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .contact-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-teal) 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
        }
        
        .form-input {
            transition: all 0.3s ease;
            border: 2px solid #e5e7eb;
        }
        
        .form-input:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
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
        
        .hours-badge {
            background-color: #f0f9ff;
            border: 2px solid #dbeafe;
            border-radius: 12px;
            padding: 1.5rem;
        }
        
        .contact-method {
            display: flex;
            align-items: flex-start;
            padding: 1.5rem;
            border-radius: 12px;
            background-color: white;
            border: 1px solid #e5e7eb;
            transition: all 0.3s ease;
        }
        
        .contact-method:hover {
            border-color: var(--primary-blue);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }
        
        .success-message {
            display: none;
            background-color: #d1fae5;
            border: 1px solid #a7f3d0;
            color: #065f46;
            padding: 1rem;
            border-radius: 8px;
            margin-top: 1rem;
        }
        
        .error-message {
            display: none;
            background-color: #fee2e2;
            border: 1px solid #fecaca;
            color: #991b1b;
            padding: 1rem;
            border-radius: 8px;
            margin-top: 1rem;
        }
        
        .map-container {
            height: 400px;
            width: 100%;
            border-radius: 12px;
            overflow: hidden;
        }
        
        @media (max-width: 768px) {
            .map-container {
                height: 300px;
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Announcement Bar -->
    <div class="bg-blue-900 text-white py-2">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-sm text-center md:text-left mb-1 md:mb-0">
                    <i class="fas fa-phone-alt mr-2"></i> Call Now: <a href="tel:+12065551234" class="font-semibold hover:text-blue-200">(206) 555-1234</a>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-sm">24/7 Service Available</span>
                    <a href="/booking" class="text-sm bg-orange-500 hover:bg-orange-600 px-3 py-1 rounded font-semibold transition-colors">
                        <i class="fas fa-calendar-alt mr-1"></i> Book Online
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="bg-blue-700 text-white w-12 h-12 rounded-lg flex items-center justify-center">
                        <i class="fas fa-wheelchair text-xl"></i>
                    </div>
                    <div>
                        <a href="/" class="font-heading text-2xl font-bold text-blue-900 hover:text-blue-700">Ride Aide LLC</a>
                        <p class="text-sm text-gray-600">Professional ADA Transportation</p>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex items-center space-x-8">
                    <a href="/" class="nav-link font-medium text-gray-700 hover:text-blue-700">Home</a>
                    <a href="/services" class="nav-link font-medium text-gray-700 hover:text-blue-700">Services</a>
                    <a href="/about" class="nav-link font-medium text-gray-700 hover:text-blue-700">About Us</a>
                    <a href="/areas" class="nav-link font-medium text-gray-700 hover:text-blue-700">Service Areas</a>
                    <a href="/fleet" class="nav-link font-medium text-gray-700 hover:text-blue-700">Our Fleet</a>
                    <a href="/contact" class="nav-link font-medium text-blue-700 hover:text-blue-700">Contact</a>
                    <a href="/booking" class="btn-primary px-6 py-2 rounded-lg font-semibold">Book a Ride</a>
                </nav>

                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" class="lg:hidden text-gray-700 text-2xl">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobileNav" class="lg:hidden hidden py-4 border-t">
                <div class="flex flex-col space-y-4">
                    <a href="/" class="font-medium text-gray-700 hover:text-blue-700 py-2">Home</a>
                    <a href="/services" class="font-medium text-gray-700 hover:text-blue-700 py-2">Services</a>
                    <a href="/about" class="font-medium text-gray-700 hover:text-blue-700 py-2">About Us</a>
                    <a href="/areas" class="font-medium text-gray-700 hover:text-blue-700 py-2">Service Areas</a>
                    <a href="/fleet" class="font-medium text-gray-700 hover:text-blue-700 py-2">Our Fleet</a>
                    <a href="/contact" class="font-medium text-blue-700 hover:text-blue-700 py-2">Contact</a>
                    <a href="/booking" class="btn-primary px-6 py-3 rounded-lg font-semibold text-center">Book a Ride</a>
                </div>
            </div>
        </div>
    </header>

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
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Contact Us</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="contact-hero text-white py-12 md:py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl">
                <h1 class="font-heading text-4xl md:text-5xl font-bold mb-6">Get in Touch with Ride Aide</h1>
                <p class="text-xl mb-8 opacity-90">
                    We're here to help with all your accessible transportation needs. Contact us today to schedule a ride, ask questions, or learn more about our services.
                </p>
                <div class="flex flex-wrap gap-3 mb-6">
                    <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium">24/7 Dispatch</span>
                    <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium">Quick Response</span>
                    <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium">Multilingual Support</span>
                    <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium">ADA Specialists</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Contact Cards -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8 -mt-16 relative z-10">
                <!-- Phone Card -->
                <div class="contact-card bg-white rounded-xl shadow-lg p-8 text-center">
                    <div class="contact-icon mx-auto">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Call Us</h3>
                    <p class="text-gray-600 mb-6">
                        Speak directly with our dispatch team for immediate assistance or to schedule a ride.
                    </p>
                    <a href="tel:+12065551234" class="text-blue-700 text-xl font-bold hover:text-blue-800 transition-colors block mb-2">
                        (206) 555-1234
                    </a>
                    <p class="text-gray-500 text-sm">24/7 Emergency Line Available</p>
                </div>
                
                <!-- Email Card -->
                <div class="contact-card bg-white rounded-xl shadow-lg p-8 text-center">
                    <div class="contact-icon mx-auto">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Email Us</h3>
                    <p class="text-gray-600 mb-6">
                        Send us a message and we'll respond within 1 business day.
                    </p>
                    <a href="mailto:info@rideaidellc.com" class="text-blue-700 text-lg font-bold hover:text-blue-800 transition-colors block mb-2">
                        info@rideaidellc.com
                    </a>
                    <p class="text-gray-500 text-sm">General Inquiries</p>
                </div>
                
                <!-- Booking Card -->
                <div class="contact-card bg-white rounded-xl shadow-lg p-8 text-center">
                    <div class="contact-icon mx-auto">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Book Online</h3>
                    <p class="text-gray-600 mb-6">
                        Schedule your ride quickly and easily through our online booking system.
                    </p>
                    <a href="/booking" class="btn-primary px-6 py-3 rounded-lg font-semibold inline-block">
                        <i class="fas fa-calendar-alt mr-2"></i> Book a Ride Now
                    </a>
                    <p class="text-gray-500 text-sm mt-3">Fast & Easy Scheduling</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Contact Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div>
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <h2 class="font-heading text-3xl font-bold text-gray-800 mb-6">Send Us a Message</h2>
                        <div class="section-divider mb-6 ml-0"></div>
                        
                        <form id="contactForm" class="space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="firstName" class="block text-gray-700 font-medium mb-2">
                                        First Name <span class="text-red-500">*</span>
                                    </label>
                                    <input 
                                        type="text" 
                                        id="firstName" 
                                        name="first_name"
                                        class="form-input w-full px-4 py-3 rounded-lg"
                                        required
                                    >
                                    <div id="firstNameError" class="error-message"></div>
                                </div>
                                
                                <div>
                                    <label for="lastName" class="block text-gray-700 font-medium mb-2">
                                        Last Name <span class="text-red-500">*</span>
                                    </label>
                                    <input 
                                        type="text" 
                                        id="lastName" 
                                        name="last_name"
                                        class="form-input w-full px-4 py-3 rounded-lg"
                                        required
                                    >
                                    <div id="lastNameError" class="error-message"></div>
                                </div>
                            </div>
                            
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="phone" class="block text-gray-700 font-medium mb-2">
                                        Phone Number <span class="text-red-500">*</span>
                                    </label>
                                    <input 
                                        type="tel" 
                                        id="phone" 
                                        name="phone"
                                        class="form-input w-full px-4 py-3 rounded-lg"
                                        required
                                    >
                                    <div id="phoneError" class="error-message"></div>
                                </div>
                                
                                <div>
                                    <label for="email" class="block text-gray-700 font-medium mb-2">
                                        Email Address
                                    </label>
                                    <input 
                                        type="email" 
                                        id="email" 
                                        name="email"
                                        class="form-input w-full px-4 py-3 rounded-lg"
                                    >
                                    <div id="emailError" class="error-message"></div>
                                </div>
                            </div>
                            
                            <div>
                                <label for="subject" class="block text-gray-700 font-medium mb-2">
                                    Subject <span class="text-red-500">*</span>
                                </label>
                                <select 
                                    id="subject" 
                                    name="subject"
                                    class="form-input w-full px-4 py-3 rounded-lg"
                                    required
                                >
                                    <option value="">Select a subject</option>
                                    <option value="booking">Schedule a Ride</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="service">Service Question</option>
                                    <option value="billing">Billing Question</option>
                                    <option value="feedback">Feedback</option>
                                    <option value="other">Other</option>
                                </select>
                                <div id="subjectError" class="error-message"></div>
                            </div>
                            
                            <div>
                                <label for="message" class="block text-gray-700 font-medium mb-2">
                                    Message <span class="text-red-500">*</span>
                                </label>
                                <textarea 
                                    id="message" 
                                    name="message"
                                    rows="6"
                                    class="form-input w-full px-4 py-3 rounded-lg"
                                    placeholder="Please provide details about your transportation needs..."
                                    required
                                ></textarea>
                                <div id="messageError" class="error-message"></div>
                            </div>
                            
                            <div class="flex items-start">
                                <input 
                                    type="checkbox" 
                                    id="privacy" 
                                    name="privacy"
                                    class="mt-1 mr-3"
                                    required
                                >
                                <label for="privacy" class="text-gray-600 text-sm">
                                    I agree to the <a href="/privacy" class="text-blue-600 hover:text-blue-800">Privacy Policy</a> and consent to Ride Aide LLC contacting me regarding my inquiry.
                                </label>
                            </div>
                            <div id="privacyError" class="error-message"></div>
                            
                            <button 
                                type="submit" 
                                id="submitBtn"
                                class="btn-primary w-full py-4 rounded-lg font-semibold text-lg"
                            >
                                <span id="submitText">Send Message</span>
                                <span id="submitLoading" class="hidden">
                                    <i class="fas fa-spinner fa-spin mr-2"></i> Sending...
                                </span>
                            </button>
                            
                            <div id="successMessage" class="success-message">
                                <i class="fas fa-check-circle mr-2"></i> Thank you! Your message has been sent. We'll respond within 1 business day.
                            </div>
                            
                            <div id="errorMessage" class="error-message">
                                <i class="fas fa-exclamation-circle mr-2"></i> There was an error sending your message. Please try again or call us directly.
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- Contact Information -->
                <div>
                    <div class="mb-8">
                        <h2 class="font-heading text-3xl font-bold text-gray-800 mb-6">Contact Information</h2>
                        <div class="section-divider mb-6 ml-0"></div>
                        <p class="text-gray-600 mb-8">
                            Reach out to us through any of the methods below. Our team is ready to assist you with accessible transportation solutions.
                        </p>
                    </div>
                    
                    <div class="space-y-6 mb-8">
                        <!-- Phone Methods -->
                        <div class="contact-method">
                            <div class="bg-blue-100 text-blue-700 w-12 h-12 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 mb-2">Phone Numbers</h3>
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <span class="text-gray-600 w-32">Dispatch:</span>
                                        <a href="tel:+12065551234" class="text-blue-700 font-semibold hover:text-blue-800">
                                            (206) 555-1234
                                        </a>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="text-gray-600 w-32">Emergency:</span>
                                        <a href="tel:+12065554321" class="text-blue-700 font-semibold hover:text-blue-800">
                                            (206) 555-4321
                                        </a>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="text-gray-600 w-32">Billing:</span>
                                        <a href="tel:+12065555678" class="text-blue-700 font-semibold hover:text-blue-800">
                                            (206) 555-5678
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Email Methods -->
                        <div class="contact-method">
                            <div class="bg-blue-100 text-blue-700 w-12 h-12 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 mb-2">Email Addresses</h3>
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <span class="text-gray-600 w-32">General:</span>
                                        <a href="mailto:info@rideaidellc.com" class="text-blue-700 hover:text-blue-800">
                                            info@rideaidellc.com
                                        </a>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="text-gray-600 w-32">Bookings:</span>
                                        <a href="mailto:bookings@rideaidellc.com" class="text-blue-700 hover:text-blue-800">
                                            bookings@rideaidellc.com
                                        </a>
                                    </div>
                                    <div class="flex items-center">
                                        <span class="text-gray-600 w-32">Billing:</span>
                                        <a href="mailto:billing@rideaidellc.com" class="text-blue-700 hover:text-blue-800">
                                            billing@rideaidellc.com
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Office Hours -->
                        <div class="contact-method">
                            <div class="bg-blue-100 text-blue-700 w-12 h-12 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 mb-2">Office Hours</h3>
                                <div class="space-y-2">
                                    <div class="flex">
                                        <span class="text-gray-600 w-32">Dispatch:</span>
                                        <span class="text-gray-800">24 Hours / 7 Days</span>
                                    </div>
                                    <div class="flex">
                                        <span class="text-gray-600 w-32">Office:</span>
                                        <span class="text-gray-800">Mon-Fri: 8:00 AM - 6:00 PM</span>
                                    </div>
                                    <div class="flex">
                                        <span class="text-gray-600 w-32">Sat-Sun:</span>
                                        <span class="text-gray-800">9:00 AM - 5:00 PM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Service Hours -->
                    <div class="hours-badge mb-8">
                        <h3 class="font-bold text-gray-800 mb-4 text-center">Transportation Service Hours</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-blue-700 mb-1">24/7</div>
                                <p class="text-gray-600 text-sm">Emergency & Medical</p>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-blue-700 mb-1">5 AM - 11 PM</div>
                                <p class="text-gray-600 text-sm">Regular Service</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Emergency Contact -->
                    <div class="bg-red-50 border border-red-100 rounded-xl p-6">
                        <div class="flex items-start">
                            <i class="fas fa-exclamation-triangle text-red-600 text-xl mr-3 mt-1"></i>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-2">Emergency Contact</h4>
                                <p class="text-gray-600 text-sm mb-3">
                                    For medical emergencies or urgent transportation needs outside regular hours, call our 24/7 emergency dispatch line.
                                </p>
                                <a href="tel:+12065554321" class="text-red-700 font-bold hover:text-red-800 text-lg">
                                    <i class="fas fa-phone-alt mr-2"></i> (206) 555-4321
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-800 mb-4">Frequently Asked Questions</h2>
                <div class="section-divider mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Quick answers to common questions about contacting Ride Aide
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="space-y-6">
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="font-bold text-gray-800 mb-3">How quickly will you respond to my contact form submission?</h3>
                        <p class="text-gray-600">
                            We respond to all contact form submissions within 1 business day. For urgent matters, please call our dispatch line directly.
                        </p>
                    </div>
                    
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="font-bold text-gray-800 mb-3">What information should I have ready when I call?</h3>
                        <p class="text-gray-600">
                            Have your pickup and drop-off addresses, desired pickup time, contact information, and any special needs or requirements ready.
                        </p>
                    </div>
                    
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="font-bold text-gray-800 mb-3">Do you provide service for non-emergency medical transportation?</h3>
                        <p class="text-gray-600">
                            Yes, we specialize in non-emergency medical transportation. We can accommodate wheelchairs, medical equipment, and provide assistance as needed.
                        </p>
                    </div>
                </div>
                
                <div class="space-y-6">
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="font-bold text-gray-800 mb-3">Can I schedule recurring rides?</h3>
                        <p class="text-gray-600">
                            Absolutely! We offer recurring ride scheduling for regular appointments like dialysis, physical therapy, or work commutes.
                        </p>
                    </div>
                    
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="font-bold text-gray-800 mb-3">What payment methods do you accept?</h3>
                        <p class="text-gray-600">
                            We accept cash, credit/debit cards, insurance, Medicare/Medicaid, and can provide billing for corporate accounts.
                        </p>
                    </div>
                    
                    <div class="border-b border-gray-200 pb-6">
                        <h3 class="font-bold text-gray-800 mb-3">Do you provide service outside regular business hours?</h3>
                        <p class="text-gray-600">
                            Yes, we offer 24/7 service for emergencies and have extended hours for regular transportation needs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Information -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-gray-800 mb-4">Our Location</h2>
                <div class="section-divider mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    While we're a mobile service serving the entire Seattle area, here's our dispatch office location
                </p>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-12">
                <div>
                    <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Dispatch Office</h3>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <i class="fas fa-map-marker-alt text-blue-700 mt-1 mr-4"></i>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-1">Address</h4>
                                    <p class="text-gray-600">
                                        123 Transportation Way<br>
                                        Suite 100<br>
                                        Seattle, WA 98101
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-phone-alt text-blue-700 mt-1 mr-4"></i>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-1">Phone</h4>
                                    <a href="tel:+12065551234" class="text-blue-700 hover:text-blue-800">
                                        (206) 555-1234
                                    </a>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-envelope text-blue-700 mt-1 mr-4"></i>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-1">Email</h4>
                                    <a href="mailto:info@rideaidellc.com" class="text-blue-700 hover:text-blue-800">
                                        info@rideaidellc.com
                                    </a>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-clock text-blue-700 mt-1 mr-4"></i>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-1">Office Hours</h4>
                                    <p class="text-gray-600">
                                        Monday - Friday: 8:00 AM - 6:00 PM<br>
                                        Saturday: 9:00 AM - 5:00 PM<br>
                                        Sunday: 9:00 AM - 5:00 PM
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <h4 class="font-bold text-gray-800 mb-3">Please Note</h4>
                            <p class="text-gray-600 text-sm">
                                This is our dispatch office location. All transportation services are provided directly to your location. We do not have a public waiting area for passengers at this location.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Parking & Accessibility -->
                    <div class="bg-blue-50 border border-blue-100 rounded-xl p-6">
                        <h4 class="font-bold text-gray-800 mb-3">Accessibility Information</h4>
                        <p class="text-gray-600 text-sm mb-4">
                            Our dispatch office is fully accessible. If you need to visit us in person, please call ahead so we can ensure we're available to assist you.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-xs font-medium">Wheelchair Accessible</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-xs font-medium">Designated Parking</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-xs font-medium">Assistance Available</span>
                        </div>
                    </div>
                </div>
                
                <!-- Map -->
                <div>
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Find Us</h3>
                        
                        <div class="map-container mb-6">
                            <!-- Static map image - in production, use Google Maps embed or similar -->
                            <div class="w-full h-full bg-gray-200 rounded-lg flex items-center justify-center">
                                <div class="text-center">
                                    <i class="fas fa-map text-gray-400 text-4xl mb-4"></i>
                                    <p class="text-gray-600">Interactive map would be here</p>
                                    <p class="text-gray-500 text-sm mt-2">Seattle, WA 98101</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="space-y-4">
                            <div>
                                <h4 class="font-bold text-gray-800 mb-2">Directions</h4>
                                <p class="text-gray-600 text-sm">
                                    Located in downtown Seattle near the convention center. Public transportation accessible via multiple bus routes and light rail.
                                </p>
                            </div>
                            
                            <div>
                                <h4 class="font-bold text-gray-800 mb-2">Public Transportation</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded text-xs">Bus Routes: 7, 14, 36, 41</span>
                                    <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded text-xs">Light Rail: Westlake Station</span>
                                    <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded text-xs">Streetcar</span>
                                </div>
                            </div>
                            
                            <div>
                                <h4 class="font-bold text-gray-800 mb-2">Parking</h4>
                                <p class="text-gray-600 text-sm">
                                    Limited street parking available. Several paid parking garages within 2 blocks. ADA parking spaces available in nearby lots.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-12 bg-blue-700 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="font-heading text-3xl md:text-4xl font-bold mb-6">Need Transportation Now?</h2>
            <p class="text-xl mb-8 opacity-90 max-w-2xl mx-auto">
                Don't wait - contact us today for reliable, accessible transportation when you need it most.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="tel:+12065551234" class="btn-secondary px-8 py-4 rounded-lg font-semibold text-lg">
                    <i class="fas fa-phone-alt mr-2"></i> Call Dispatch Now
                </a>
                <a href="/booking" class="bg-white text-blue-700 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-colors">
                    <i class="fas fa-calendar-alt mr-2"></i> Book Online
                </a>
            </div>
            <p class="mt-6 text-blue-200">
                <i class="fas fa-info-circle mr-2"></i> Emergency? Call our 24/7 line: <a href="tel:+12065554321" class="font-semibold hover:text-white">(206) 555-4321</a>
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
                
                <!-- Contact Quick Links -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Contact Methods</h4>
                    <ul class="space-y-3">
                        <li><a href="tel:+12065551234" class="text-gray-400 hover:text-white transition-colors">Dispatch: (206) 555-1234</a></li>
                        <li><a href="tel:+12065554321" class="text-gray-400 hover:text-white transition-colors">Emergency: (206) 555-4321</a></li>
                        <li><a href="mailto:info@rideaidellc.com" class="text-gray-400 hover:text-white transition-colors">info@rideaidellc.com</a></li>
                        <li><a href="/contact#form" class="text-gray-400 hover:text-white transition-colors">Contact Form</a></li>
                    </ul>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="/" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
                        <li><a href="/services" class="text-gray-400 hover:text-white transition-colors">Services</a></li>
                        <li><a href="/about" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="/areas" class="text-gray-400 hover:text-white transition-colors">Service Areas</a></li>
                        <li><a href="/contact" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Hours -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Service Hours</h4>
                    <ul class="space-y-2">
                        <li class="text-gray-400">Dispatch: 24/7</li>
                        <li class="text-gray-400">Office: Mon-Fri 8AM-6PM</li>
                        <li class="text-gray-400">Transport: 5AM-11PM Daily</li>
                        <li class="text-gray-400">Emergency: Always Available</li>
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
        
        // Contact Form Handling
        const contactForm = document.getElementById('contactForm');
        const submitBtn = document.getElementById('submitBtn');
        const submitText = document.getElementById('submitText');
        const submitLoading = document.getElementById('submitLoading');
        const successMessage = document.getElementById('successMessage');
        const errorMessage = document.getElementById('errorMessage');
        
        // Clear error messages
        function clearErrors() {
            document.querySelectorAll('.error-message').forEach(el => {
                el.style.display = 'none';
                el.textContent = '';
            });
        }
        
        // Show error message
        function showError(elementId, message) {
            const errorElement = document.getElementById(elementId);
            if (errorElement) {
                errorElement.textContent = message;
                errorElement.style.display = 'block';
            }
        }
        
        // Validate form
        function validateForm() {
            clearErrors();
            let isValid = true;
            
            // Validate first name
            const firstName = document.getElementById('firstName').value.trim();
            if (!firstName) {
                showError('firstNameError', 'First name is required');
                isValid = false;
            }
            
            // Validate last name
            const lastName = document.getElementById('lastName').value.trim();
            if (!lastName) {
                showError('lastNameError', 'Last name is required');
                isValid = false;
            }
            
            // Validate phone
            const phone = document.getElementById('phone').value.trim();
            const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;
            if (!phone) {
                showError('phoneError', 'Phone number is required');
                isValid = false;
            } else if (!phoneRegex.test(phone.replace(/[\s\-\(\)\.]/g, ''))) {
                showError('phoneError', 'Please enter a valid phone number');
                isValid = false;
            }
            
            // Validate email (optional but must be valid if provided)
            const email = document.getElementById('email').value.trim();
            if (email) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email)) {
                    showError('emailError', 'Please enter a valid email address');
                    isValid = false;
                }
            }
            
            // Validate subject
            const subject = document.getElementById('subject').value;
            if (!subject) {
                showError('subjectError', 'Please select a subject');
                isValid = false;
            }
            
            // Validate message
            const message = document.getElementById('message').value.trim();
            if (!message) {
                showError('messageError', 'Message is required');
                isValid = false;
            } else if (message.length < 10) {
                showError('messageError', 'Please provide more details in your message');
                isValid = false;
            }
            
            // Validate privacy checkbox
            const privacy = document.getElementById('privacy');
            if (!privacy.checked) {
                showError('privacyError', 'You must agree to the privacy policy');
                isValid = false;
            }
            
            return isValid;
        }
        
        // Handle form submission
        contactForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            if (!validateForm()) {
                return;
            }
            
            // Show loading state
            submitText.classList.add('hidden');
            submitLoading.classList.remove('hidden');
            submitBtn.disabled = true;
            
            // Hide previous messages
            successMessage.style.display = 'none';
            errorMessage.style.display = 'none';
            
            // Prepare form data
            const formData = new FormData(this);
            
            try {
                // In a real application, this would be a fetch request to your Laravel backend
                // For now, we'll simulate a successful submission
                
                // Simulate API call delay
                await new Promise(resolve => setTimeout(resolve, 1500));
                
                // Show success message
                successMessage.style.display = 'block';
                contactForm.reset();
                
                // Scroll to success message
                successMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                
            } catch (error) {
                console.error('Error:', error);
                errorMessage.style.display = 'block';
                errorMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            } finally {
                // Reset button state
                submitText.classList.remove('hidden');
                submitLoading.classList.add('hidden');
                submitBtn.disabled = false;
            }
        });
        
        // Auto-format phone number
        const phoneInput = document.getElementById('phone');
        phoneInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            
            if (value.length > 0) {
                // Format as (XXX) XXX-XXXX
                if (value.length <= 3) {
                    value = '(' + value;
                } else if (value.length <= 6) {
                    value = '(' + value.substring(0, 3) + ') ' + value.substring(3);
                } else {
                    value = '(' + value.substring(0, 3) + ') ' + value.substring(3, 6) + '-' + value.substring(6, 10);
                }
            }
            
            e.target.value = value;
        });
        
        // Contact card hover effects
        document.querySelectorAll('.contact-card').forEach(card => {
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
        
        // Contact method hover effects
        document.querySelectorAll('.contact-method').forEach(method => {
            method.addEventListener('mouseenter', function() {
                this.style.borderColor = '#1e40af';
                this.style.boxShadow = '0 10px 25px rgba(0, 0, 0, 0.05)';
            });
            
            method.addEventListener('mouseleave', function() {
                this.style.borderColor = '#e5e7eb';
                this.style.boxShadow = '';
            });
        });
        
        // Form input focus effects
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('focus', function() {
                this.style.borderColor = '#1e40af';
                this.style.boxShadow = '0 0 0 3px rgba(59, 130, 246, 0.1)';
            });
            
            input.addEventListener('blur', function() {
                this.style.borderColor = '#e5e7eb';
                this.style.boxShadow = '';
            });
        });
    </script>
</body>
</html>