<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Ride | Ride Aide LLC</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Livewire Styles -->
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">
    <div class="min-h-screen">
        <!-- Header -->
        <header class="bg-white shadow">
            <div class="container mx-auto px-4 py-4">
                <div class="flex items-center">
                    <div class="bg-blue-600 text-white w-10 h-10 rounded-lg flex items-center justify-center mr-3">
                        <i class="fas fa-wheelchair"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">Ride Aide LLC</h1>
                        <p class="text-gray-600 text-sm">Professional ADA Transportation</p>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="container mx-auto px-4 py-8">
            <div class="max-w-4xl mx-auto">
                <!-- Page Header -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Book Accessible Transportation</h2>
                    <p class="text-gray-600 text-lg">Schedule your ride in 3 easy steps</p>
                </div>

                <!-- Livewire Component -->
                <div class="bg-white rounded-xl shadow-lg p-6 md:p-8">
                    <livewire:booking-form />
                </div>

                <!-- Help Section -->
                <div class="mt-8 bg-blue-50 border border-blue-100 rounded-xl p-6">
                    <h3 class="font-bold text-gray-800 mb-4">Need Help?</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-medium text-gray-800 mb-2">Call Us</h4>
                            <a href="tel:+12065551234" class="text-blue-600 hover:text-blue-800">
                                <i class="fas fa-phone-alt mr-2"></i> (206) 555-1234
                            </a>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-800 mb-2">Booking Hours</h4>
                            <p class="text-gray-600 text-sm">24/7 online booking</p>
                            <p class="text-gray-600 text-sm">Phone: 5 AM - 11 PM Daily</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-8 mt-12">
            <div class="container mx-auto px-4 text-center">
                <p>&copy; {{ date('Y') }} Ride Aide LLC. All rights reserved.</p>
                <p class="text-gray-400 text-sm mt-2">Professional ADA Transportation Services</p>
            </div>
        </footer>
    </div>

    <!-- Livewire Scripts -->
    @livewireScripts
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

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
        
        // Initialize date/time pickers
        document.addEventListener('DOMContentLoaded', function() {
            // Pickup date picker
            const pickupDate = flatpickr("#pickupDate", {
                minDate: "today",
                dateFormat: "Y-m-d",
                disableMobile: true,
                onChange: function(selectedDates, dateStr) {
                    updateBookingSummary();
                }
            });
            
            // Pickup time picker
            const pickupTime = flatpickr("#pickupTime", {
                enableTime: true,
                noCalendar: true,
                dateFormat: "h:i K",
                time_24hr: false,
                minuteIncrement: 15,
                disableMobile: true,
                onChange: function(selectedDates, dateStr) {
                    updateBookingSummary();
                }
            });
            
            // Return time picker (conditional)
            const returnTime = flatpickr("#returnTime", {
                enableTime: true,
                noCalendar: true,
                dateFormat: "h:i K",
                time_24hr: false,
                minuteIncrement: 15,
                disableMobile: true,
                onChange: function(selectedDates, dateStr) {
                    updateBookingSummary();
                }
            });
            
            // Return date picker (for round trips)
            const returnDate = flatpickr("#returnDate", {
                minDate: "today",
                dateFormat: "Y-m-d",
                disableMobile: true,
                onChange: function(selectedDates, dateStr) {
                    updateBookingSummary();
                }
            });
        });
        
        // Update booking summary
        function updateBookingSummary() {
            // Get form values
            const serviceType = document.querySelector('input[name="service_type"]:checked');
            const pickupDate = document.getElementById('pickupDate')?.value;
            const pickupTime = document.getElementById('pickupTime')?.value;
            const passengers = document.getElementById('passengers')?.value || '1';
            const wheelchair = document.querySelector('input[name="wheelchair"]:checked')?.value;
            const tripType = document.querySelector('input[name="trip_type"]:checked')?.value;
            
            // Update summary
            if (serviceType) {
                document.getElementById('summaryService').textContent = serviceType.nextElementSibling?.textContent || '-';
            }
            
            if (pickupDate && pickupTime) {
                const date = new Date(pickupDate);
                const formattedDate = date.toLocaleDateString('en-US', { 
                    weekday: 'short', 
                    month: 'short', 
                    day: 'numeric' 
                });
                document.getElementById('summaryDateTime').textContent = `${formattedDate} at ${pickupTime}`;
            }
            
            document.getElementById('summaryPassengers').textContent = passengers;
            document.getElementById('summaryWheelchair').textContent = wheelchair === 'yes' ? 'Yes' : 'No';
            
            // Calculate estimated cost
            let baseCost = 0;
            if (serviceType) {
                switch(serviceType.value) {
                    case 'medical': baseCost = 45; break;
                    case 'errands': baseCost = 35; break;
                    case 'social': baseCost = 30; break;
                    case 'corporate': baseCost = 55; break;
                    case 'event': baseCost = 60; break;
                    default: baseCost = 40;
                }
            }
            
            // Add wheelchair surcharge
            if (wheelchair === 'yes') {
                baseCost += 10;
            }
            
            // Add passenger surcharge
            const passengerCount = parseInt(passengers) || 1;
            if (passengerCount > 1) {
                baseCost += (passengerCount - 1) * 5;
            }
            
            // Update cost display
            document.getElementById('summaryCost').textContent = `$${baseCost}.00`;
        }
        
        // Service option selection
        document.querySelectorAll('input[name="service_type"]').forEach(radio => {
            radio.addEventListener('change', updateBookingSummary);
        });
        
        // Wheelchair selection
        document.querySelectorAll('input[name="wheelchair"]').forEach(radio => {
            radio.addEventListener('change', updateBookingSummary);
        });
        
        // Trip type selection
        document.querySelectorAll('input[name="trip_type"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const returnFields = document.getElementById('returnFields');
                if (this.value === 'round') {
                    returnFields.classList.remove('hidden');
                } else {
                    returnFields.classList.add('hidden');
                }
                updateBookingSummary();
            });
        });
        
        // Passenger count change
        const passengersInput = document.getElementById('passengers');
        if (passengersInput) {
            passengersInput.addEventListener('change', updateBookingSummary);
            passengersInput.addEventListener('input', updateBookingSummary);
        }
        
        // Form validation
        function validateStep(step) {
            let isValid = true;
            
            if (step === 1) {
                // Validate ride details
                const serviceType = document.querySelector('input[name="service_type"]:checked');
                const pickupAddress = document.getElementById('pickupAddress')?.value.trim();
                const dropoffAddress = document.getElementById('dropoffAddress')?.value.trim();
                const pickupDate = document.getElementById('pickupDate')?.value;
                const pickupTime = document.getElementById('pickupTime')?.value;
                
                if (!serviceType) {
                    showError('serviceTypeError', 'Please select a service type');
                    isValid = false;
                }
                
                if (!pickupAddress) {
                    showError('pickupAddressError', 'Pickup address is required');
                    isValid = false;
                }
                
                if (!dropoffAddress) {
                    showError('dropoffAddressError', 'Drop-off address is required');
                    isValid = false;
                }
                
                if (!pickupDate) {
                    showError('pickupDateError', 'Pickup date is required');
                    isValid = false;
                }
                
                if (!pickupTime) {
                    showError('pickupTimeError', 'Pickup time is required');
                    isValid = false;
                }
            } else if (step === 2) {
                // Validate passenger info
                const firstName = document.getElementById('firstName')?.value.trim();
                const lastName = document.getElementById('lastName')?.value.trim();
                const phone = document.getElementById('phone')?.value.trim();
                const email = document.getElementById('email')?.value.trim();
                
                if (!firstName) {
                    showError('firstNameError', 'First name is required');
                    isValid = false;
                }
                
                if (!lastName) {
                    showError('lastNameError', 'Last name is required');
                    isValid = false;
                }
                
                if (!phone) {
                    showError('phoneError', 'Phone number is required');
                    isValid = false;
                } else if (!/^[\+]?[1-9][\d]{0,15}$/.test(phone.replace(/[\s\-\(\)\.]/g, ''))) {
                    showError('phoneError', 'Please enter a valid phone number');
                    isValid = false;
                }
                
                if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                    showError('emailError', 'Please enter a valid email address');
                    isValid = false;
                }
            }
            
            return isValid;
        }
        
        // Show error message
        function showError(elementId, message) {
            const errorElement = document.getElementById(elementId);
            if (errorElement) {
                errorElement.textContent = message;
                errorElement.classList.add('show');
            }
        }
        
        // Clear all errors
        function clearErrors() {
            document.querySelectorAll('.error-message').forEach(el => {
                el.classList.remove('show');
                el.textContent = '';
            });
        }
        
        // Form step navigation
        let currentStep = 1;
        
        function goToStep(step) {
            if (step < 1 || step > 3) return;
            
            // Validate current step before moving
            if (step > currentStep && !validateStep(currentStep)) {
                return;
            }
            
            // Update step indicators
            document.querySelectorAll('.form-step').forEach(el => {
                el.classList.remove('active', 'completed');
            });
            
            document.querySelectorAll('.step-indicator').forEach((el, index) => {
                el.classList.remove('active', 'completed', 'inactive');
                if (index + 1 === step) {
                    el.classList.add('active');
                } else if (index + 1 < step) {
                    el.classList.add('completed');
                } else {
                    el.classList.add('inactive');
                }
            });
            
            // Update step content
            document.querySelectorAll('.step-content').forEach(el => {
                el.classList.add('hidden');
            });
            
            const stepElement = document.getElementById(`step${step}`);
            if (stepElement) {
                stepElement.classList.remove('hidden');
            }
            
            // Update step text
            const stepText = document.querySelector('.step-indicator.active + div p');
            if (stepText && step === 2) {
                stepText.textContent = 'Passenger Info';
            } else if (stepText && step === 3) {
                stepText.textContent = 'Confirmation';
            }
            
            currentStep = step;
        }
        
        // Initialize with step 1
        document.addEventListener('DOMContentLoaded', () => {
            goToStep(1);
        });
        
        // Auto-format phone number
        const phoneInput = document.getElementById('phone');
        if (phoneInput) {
            phoneInput.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, '');
                
                if (value.length > 0) {
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
        }
    </script>
</body>

</html>
