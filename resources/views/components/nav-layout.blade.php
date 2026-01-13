    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="bg-blue-700 text-white w-12 h-12 rounded-lg flex items-center justify-center">
                       <img src="{{ asset('images/ride-logo.PNG') }}" alt="Logo" class="block h-12 w-auto" />
                    </div>
                    <div>
                        <h1 class="font-heading text-2xl font-bold text-blue-900">Ride Aide LLC</h1>
                        <p class="text-sm text-gray-600">Professional ADA Transportation</p>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex items-center space-x-8">
                    <a href="/" class="nav-link font-medium text-gray-700 hover:text-blue-700">Home</a>
                    <a href="/all-services" class="nav-link font-medium text-gray-700 hover:text-blue-700">Services</a>
                    <a href="/all-about" class="nav-link font-medium text-gray-700 hover:text-blue-700">About Us</a>
                    {{-- <a href="/fleet" class="nav-link font-medium text-gray-700 hover:text-blue-700">Our Fleet</a> --}}
                    <a href="/service-area" class="nav-link font-medium text-gray-700 hover:text-blue-700">Areas Served</a>
                    <a href="/contact" class="nav-link font-medium text-gray-700 hover:text-blue-700">Contact</a>
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
                    <a href="/fleet" class="font-medium text-gray-700 hover:text-blue-700 py-2">Our Fleet</a>
                    <a href="/areas" class="font-medium text-gray-700 hover:text-blue-700 py-2">Areas Served</a>
                    <a href="/contact" class="font-medium text-gray-700 hover:text-blue-700 py-2">Contact</a>
                    <a href="/booking" class="btn-primary px-6 py-3 rounded-lg font-semibold text-center">Book a Ride</a>
                </div>
            </div>
        </div>
    </header>