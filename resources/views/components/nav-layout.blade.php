    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4">
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
                    <a href="/service-area" class="nav-link font-medium text-gray-700 hover:text-blue-700">Areas
                        Served</a>
                    <a href="/contact" class="nav-link font-medium text-gray-700 hover:text-blue-700">Contact</a>
                    <a href="/booking" class="btn-primary px-6 py-2 rounded-lg font-semibold">Book a Ride</a>
                </nav>

                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" class="lg:hidden text-gray-700 text-2xl">
                    <i class="fas fa-bars"></i>
                </button>
                @auth
                    <div class="hidden sm:flex sm:items-center sm:ms-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>
                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile')" wire:navigate>
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <button wire:click="logout" class="w-full text-start">
                                    <x-dropdown-link>
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </button>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endauth
                @guest
                    <div class="hidden sm:flex sm:items-center sm:ms-6">
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline px-3 py-2">Login</a>
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 underline px-3 py-2">Register</a>
                    </div>
                @endguest

            </div>



            <!-- Mobile Navigation -->
            <div id="mobileNav" class="lg:hidden hidden py-4 border-t">
                <div class="flex flex-col space-y-4">
                    <a href="/" class="font-medium text-gray-700 hover:text-blue-700 py-2">Home</a>
                    <a href="/all-services" class="font-medium text-gray-700 hover:text-blue-700 py-2">Services</a>
                    <a href="/all-about" class="font-medium text-gray-700 hover:text-blue-700 py-2">About Us</a>
                    {{-- <a href="/fleet" class="font-medium text-gray-700 hover:text-blue-700 py-2">Our Fleet</a> --}}
                    <a href="/service-area" class="font-medium text-gray-700 hover:text-blue-700 py-2">Areas Served</a>
                    <a href="/contact" class="font-medium text-gray-700 hover:text-blue-700 py-2">Contact</a>
                    <a href="/booking" class="btn-primary px-6 py-3 rounded-lg font-semibold text-center">Book a
                        Ride</a>
                </div>
            </div>
        </div>
    </header>
