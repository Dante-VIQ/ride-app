<div>
    @if ($bookingSubmitted)
        <!-- Success Message -->
        <div class="success-message p-8 text-center">
            <div class="text-green-600 text-5xl mb-6">
                <i class="fas fa-check-circle"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Booking Confirmed!</h3>
            <p class="text-gray-600 mb-6">
                Thank you, {{ $firstName }}! Your booking has been submitted successfully.
                Your booking reference is: <strong class="text-blue-700">{{ 'RA' . strtoupper(uniqid()) }}</strong>
            </p>
            <div class="bg-blue-50 border border-blue-100 rounded-lg p-6 mb-6">
                <h4 class="font-bold text-gray-800 mb-3">What happens next?</h4>
                <ul class="text-gray-600 text-sm space-y-2 text-left">
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>You'll receive a confirmation call within 1 hour</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Driver will call 15 minutes before pickup</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Have your payment method ready for the driver</span>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button wire:click="resetForm" class="btn-primary px-6 py-3 rounded-lg font-semibold">
                    <i class="fas fa-calendar-plus mr-2"></i> Book Another Ride
                </button>
                <a href="/" class="btn-secondary px-6 py-3 rounded-lg font-semibold text-center">
                    <i class="fas fa-home mr-2"></i> Return Home
                </a>
            </div>
        </div>
    @else
        <!-- Step 1: Ride Details -->
        <div id="step1" class="step-content {{ $currentStep !== 1 ? 'hidden' : '' }}">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Ride Details</h3>

            <!-- Service Type -->
            <div class="mb-8">
                <label class="block text-gray-700 font-medium mb-4">
                    Service Type <span class="text-red-500">*</span>
                </label>
                <div class="grid sm:grid-cols-2 gap-4">
                    @foreach ($serviceTypes as $service)
                        <label class="service-option {{ $serviceType === $service['id'] ? 'selected' : '' }}">
                            <input type="radio" name="service_type" wire:model="serviceType"
                                value="{{ $service['id'] }}" class="hidden">
                            <div class="flex items-start">
                                <div class="mt-1 mr-3">
                                    <div class="w-5 h-5 border-2 rounded-full flex items-center justify-center">
                                        @if ($serviceType === $service['id'])
                                            <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                                        @endif
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800">{{ $service['name'] }}</h4>
                                    <p class="text-gray-600 text-sm mt-1">{{ $service['description'] }}</p>
                                </div>
                            </div>
                        </label>
                    @endforeach
                </div>
                @error('serviceType')
                    <div class="error-message show">{{ $message }}</div>
                @enderror
            </div>

            <!-- Trip Type -->
            <div class="mb-8">
                <label class="block text-gray-700 font-medium mb-4">
                    Trip Type <span class="text-red-500">*</span>
                </label>
                <div class="flex space-x-6">
                    <label class="flex items-center">
                        <input type="radio" name="trip_type" wire:model="tripType" value="one-way" class="mr-2">
                        <span>One-way Trip</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="trip_type" wire:model="tripType" value="round" class="mr-2">
                        <span>Round Trip</span>
                    </label>
                </div>
            </div>

            <!-- Addresses -->
            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <div>
                    <label for="pickupAddress" class="block text-gray-700 font-medium mb-2">
                        Pickup Address <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="pickupAddress" wire:model="pickupAddress" placeholder="Street, City, ZIP"
                        class="form-input w-full px-4 py-3 rounded-lg">
                    @error('pickupAddress')
                        <div class="error-message show">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="dropoffAddress" class="block text-gray-700 font-medium mb-2">
                        Drop-off Address <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="dropoffAddress" wire:model="dropoffAddress"
                        placeholder="Street, City, ZIP" class="form-input w-full px-4 py-3 rounded-lg">
                    @error('dropoffAddress')
                        <div class="error-message show">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Date & Time -->
            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <div>
                    <label for="pickupDate" class="block text-gray-700 font-medium mb-2">
                        Pickup Date <span class="text-red-500">*</span>
                    </label>
                    <input type="date" id="pickupDate" wire:model="pickupDate" min="{{ date('Y-m-d') }}"
                        class="form-input w-full px-4 py-3 rounded-lg">
                    @error('pickupDate')
                        <div class="error-message show">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="pickupTime" class="block text-gray-700 font-medium mb-2">
                        Pickup Time <span class="text-red-500">*</span>
                    </label>
                    <input type="time" id="pickupTime" wire:model="pickupTime"
                        class="form-input w-full px-4 py-3 rounded-lg">
                    @error('pickupTime')
                        <div class="error-message show">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Return Trip (conditional) -->
            @if ($tripType === 'round')
                <div id="returnFields" class="grid md:grid-cols-2 gap-6 mb-8">
                    <div>
                        <label for="returnDate" class="block text-gray-700 font-medium mb-2">
                            Return Date <span class="text-red-500">*</span>
                        </label>
                        <input type="date" id="returnDate" wire:model="returnDate" min="{{ $pickupDate }}"
                            class="form-input w-full px-4 py-3 rounded-lg">
                        @error('returnDate')
                            <div class="error-message show">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="returnTime" class="block text-gray-700 font-medium mb-2">
                            Return Time <span class="text-red-500">*</span>
                        </label>
                        <input type="time" id="returnTime" wire:model="returnTime"
                            class="form-input w-full px-4 py-3 rounded-lg">
                        @error('returnTime')
                            <div class="error-message show">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            @endif

            <!-- Passengers & Wheelchair -->
            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <div class="mb-6">
                    <label for="passengers" class="form-label">Number of Passengers *</label>
                    <input type="number" id="passengers" wire:model="passengers" min="1" max="10"
                        class="form-input w-full px-4 py-3 rounded-lg" required>
                    @error('passengers')
                        <div class="error-message show">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-4">
                        Wheelchair Access Required? <span class="text-red-500">*</span>
                    </label>
                    <div class="flex space-x-6">
                        <label class="flex items-center">
                            <input type="radio" name="wheelchair" wire:model="wheelchair" value="yes"
                                class="mr-2">
                            <span>Yes</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="wheelchair" wire:model="wheelchair" value="no"
                                class="mr-2">
                            <span>No</span>
                        </label>
                    </div>
                    @error('wheelchair')
                        <div class="error-message show">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Special Requirements -->
            <div class="mb-8">
                <label for="specialRequirements" class="block text-gray-700 font-medium mb-2">
                    Special Requirements
                </label>
                <textarea id="specialRequirements" wire:model="specialRequirements" rows="3"
                    placeholder="Please list any special requirements (oxygen tanks, service animal, specific vehicle type, etc.)"
                    class="form-input w-full px-4 py-3 rounded-lg"></textarea>
            </div>

            <!-- Navigation -->
            <div class="flex justify-end">
                <button type="button" wire:click="nextStep" class="btn-primary px-8 py-3 rounded-lg font-semibold">
                    Continue to Passenger Info
                    <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
        </div>

        <!-- Step 2: Passenger Info -->
        <div id="step2" class="step-content {{ $currentStep !== 2 ? 'hidden' : '' }}">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Passenger Information</h3>

            <!-- Name -->
            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <div>
                    <label for="firstName" class="block text-gray-700 font-medium mb-2">
                        First Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="firstName" wire:model="firstName"
                        class="form-input w-full px-4 py-3 rounded-lg">
                    @error('firstName')
                        <div class="error-message show">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="lastName" class="block text-gray-700 font-medium mb-2">
                        Last Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="lastName" wire:model="lastName"
                        class="form-input w-full px-4 py-3 rounded-lg">
                    @error('lastName')
                        <div class="error-message show">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Contact Info -->
            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <div>
                    <label for="phone" class="block text-gray-700 font-medium mb-2">
                        Phone Number <span class="text-red-500">*</span>
                    </label>
                    <input type="tel" id="phone" wire:model="phone" placeholder="(555) 123-4567"
                        class="form-input w-full px-4 py-3 rounded-lg">
                    @error('phone')
                        <div class="error-message show">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-gray-700 font-medium mb-2">
                        Email Address
                    </label>
                    <input type="email" id="email" wire:model="email" placeholder="name@example.com"
                        class="form-input w-full px-4 py-3 rounded-lg">
                    @error('email')
                        <div class="error-message show">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Preferred Contact -->
            <div class="mb-8">
                <label class="block text-gray-700 font-medium mb-4">
                    Preferred Contact Method <span class="text-red-500">*</span>
                </label>
                <div class="grid sm:grid-cols-3 gap-4">
                    <label class="service-option {{ $preferredContact === 'phone' ? 'selected' : '' }}">
                        <input type="radio" name="preferredContact" wire:model="preferredContact" value="phone"
                            class="hidden">
                        <div class="flex items-center justify-center flex-col p-4">
                            <i class="fas fa-phone text-2xl mb-2"></i>
                            <span>Phone Call</span>
                        </div>
                    </label>

                    <label class="service-option {{ $preferredContact === 'email' ? 'selected' : '' }}">
                        <input type="radio" name="preferredContact" wire:model="preferredContact" value="email"
                            class="hidden">
                        <div class="flex items-center justify-center flex-col p-4">
                            <i class="fas fa-envelope text-2xl mb-2"></i>
                            <span>Email</span>
                        </div>
                    </label>

                    <label class="service-option {{ $preferredContact === 'text' ? 'selected' : '' }}">
                        <input type="radio" name="preferredContact" wire:model="preferredContact" value="text"
                            class="hidden">
                        <div class="flex items-center justify-center flex-col p-4">
                            <i class="fas fa-sms text-2xl mb-2"></i>
                            <span>Text Message</span>
                        </div>
                    </label>
                </div>
                @error('preferredContact')
                    <div class="error-message show">{{ $message }}</div>
                @enderror
            </div>

            <!-- Insurance Info (optional) -->
            <div class="mb-8">
                <h4 class="font-bold text-gray-800 mb-4">Insurance Information (Optional)</h4>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="insuranceProvider" class="block text-gray-700 font-medium mb-2">
                            Insurance Provider
                        </label>
                        <input type="text" id="insuranceProvider" wire:model="insuranceProvider"
                            placeholder="e.g., Medicare, Blue Cross" class="form-input w-full px-4 py-3 rounded-lg">
                    </div>

                    <div>
                        <label for="insuranceId" class="block text-gray-700 font-medium mb-2">
                            Insurance ID Number
                        </label>
                        <input type="text" id="insuranceId" wire:model="insuranceId"
                            placeholder="Your insurance ID" class="form-input w-full px-4 py-3 rounded-lg">
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <div class="flex justify-between">
                <button type="button" wire:click="previousStep"
                    class="px-6 py-3 rounded-lg font-semibold border border-gray-300 text-gray-700 hover:bg-gray-50">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Back to Ride Details
                </button>

                <button type="button" wire:click="nextStep" class="btn-primary px-8 py-3 rounded-lg font-semibold">
                    Continue to Confirmation
                    <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
        </div>

        <!-- Step 3: Confirmation -->
        <div id="step3" class="step-content {{ $currentStep !== 3 ? 'hidden' : '' }}">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Confirm Your Booking</h3>

            <!-- Booking Summary -->
            <div class="bg-gray-50 rounded-lg p-6 mb-8">
                <h4 class="font-bold text-gray-800 mb-4">Booking Summary</h4>
                <div class="space-y-3">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Service:</span>
                        <span class="font-medium">
                            @foreach ($serviceTypes as $service)
                                @if ($service['id'] === $serviceType)
                                    {{ $service['name'] }}
                                @endif
                            @endforeach
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-gray-600">Trip Type:</span>
                        <span class="font-medium">{{ $tripType === 'one-way' ? 'One-way' : 'Round Trip' }}</span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-gray-600">Pickup:</span>
                        <span class="font-medium">{{ $pickupAddress }}</span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-gray-600">Drop-off:</span>
                        <span class="font-medium">{{ $dropoffAddress }}</span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-gray-600">Date & Time:</span>
                        <span class="font-medium">
                            {{ \Carbon\Carbon::parse($pickupDate)->format('M j, Y') }} at {{ $pickupTime }}
                            @if ($tripType === 'round')
                                <br>Return: {{ \Carbon\Carbon::parse($returnDate)->format('M j, Y') }} at
                                {{ $returnTime }}
                            @endif
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-gray-600">Passengers:</span>
                        <span class="font-medium">{{ $passengers }}</span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-gray-600">Wheelchair:</span>
                        <span class="font-medium">{{ $wheelchair === 'yes' ? 'Yes' : 'No' }}</span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-gray-600">Passenger:</span>
                        <span class="font-medium">{{ $firstName }} {{ $lastName }}</span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-gray-600">Contact:</span>
                        <span class="font-medium">{{ $phone }}</span>
                    </div>

                    <hr class="my-4">

                    <div class="flex justify-between text-lg font-bold">
                        <span>Estimated Cost:</span>
                        <span class="text-blue-700">${{ number_format($estimatedCost, 2) }}</span>
                    </div>
                </div>
            </div>

            <!-- Additional Notes -->
            <div class="mb-8">
                <label for="additionalNotes" class="block text-gray-700 font-medium mb-2">
                    Additional Notes (Optional)
                </label>
                <textarea id="additionalNotes" wire:model="additionalNotes" rows="3"
                    placeholder="Any additional information for the driver..." class="form-input w-full px-4 py-3 rounded-lg"></textarea>
            </div>

            <!-- Terms & Privacy -->
            <div class="mb-8">
                <div class="space-y-4">
                    <label class="flex items-start">
                        <input type="checkbox" wire:model="termsAccepted" class="mt-1 mr-3">
                        <span class="text-gray-600">
                            I agree to the <a href="/terms" class="text-blue-600 hover:text-blue-800"
                                target="_blank">Terms and Conditions</a> of Ride Aide LLC transportation services.
                        </span>
                    </label>
                    @error('termsAccepted')
                        <div class="error-message show">{{ $message }}</div>
                    @enderror

                    <label class="flex items-start">
                        <input type="checkbox" wire:model="privacyAccepted" class="mt-1 mr-3">
                        <span class="text-gray-600">
                            I agree to the <a href="/privacy" class="text-blue-600 hover:text-blue-800"
                                target="_blank">Privacy Policy</a> and consent to Ride Aide LLC contacting me regarding
                            my booking.
                        </span>
                    </label>
                    @error('privacyAccepted')
                        <div class="error-message show">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Navigation & Submit -->
            <div class="flex justify-between">
                <button type="button" wire:click="previousStep"
                    class="px-6 py-3 rounded-lg font-semibold border border-gray-300 text-gray-700 hover:bg-gray-50">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Back to Passenger Info
                </button>

                <button type="button" wire:click="submitBooking" wire:loading.attr="disabled"
                    class="btn-primary px-8 py-3 rounded-lg font-semibold"
                    {{ !$termsAccepted || !$privacyAccepted ? 'disabled' : '' }}>
                    @if ($isSubmitting)
                        <span class="loading-spinner"></span>
                        Processing...
                    @else
                        <i class="fas fa-calendar-check mr-2"></i>
                        Confirm Booking
                    @endif
                </button>
            </div>

            <!-- Flash Messages -->
            @if (session()->has('error'))
                <div class="mt-6 p-4 bg-red-50 border border-red-100 rounded-lg text-red-700">
                    <i class="fas fa-exclamation-circle mr-2"></i>
                    {{ session('error') }}
                </div>
            @endif
        </div>
    @endif
</div>
