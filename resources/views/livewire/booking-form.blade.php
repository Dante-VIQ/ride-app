<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Book Your Ride</h1>
            <p class="text-lg text-gray-600">Fill out the form below to schedule your transportation</p>
        </div>

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                {{ session('error') }}
            </div>
        @endif

        <form id="bookingForm" method="POST" action="{{ route('booking.submit') }}" class="space-y-8">
            @csrf
            
            <!-- Step Indicator -->
            <div class="flex justify-between mb-8">
                <div class="flex-1 text-center">
                    <div class="w-10 h-10 mx-auto rounded-full bg-blue-600 text-white flex items-center justify-center font-bold">1</div>
                    <p class="mt-2 text-sm font-medium">Ride Details</p>
                </div>
                <div class="flex-1 text-center">
                    <div class="w-10 h-10 mx-auto rounded-full bg-gray-200 text-gray-600 flex items-center justify-center font-bold">2</div>
                    <p class="mt-2 text-sm font-medium text-gray-600">Passenger Info</p>
                </div>
                <div class="flex-1 text-center">
                    <div class="w-10 h-10 mx-auto rounded-full bg-gray-200 text-gray-600 flex items-center justify-center font-bold">3</div>
                    <p class="mt-2 text-sm font-medium text-gray-600">Additional Info</p>
                </div>
            </div>

            <!-- Step 1: Ride Details -->
            <div id="step1" class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Ride Details</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Service Type -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Service Type *</label>
                        <select name="serviceType" required class="form-select w-full rounded-lg border-gray-300">
                            <option value="">Select a service</option>
                            @foreach($serviceTypes as $service)
                                <option value="{{ $service['id'] ?? $service['id'] }}" 
                                        {{ old('serviceType') == ($service['id'] ?? $service['id']) ? 'selected' : '' }}>
                                    {{ $service['name'] }}
                                </option>
                            @endforeach
                        </select>
                        @error('serviceType')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Trip Type -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Trip Type *</label>
                        <div class="flex space-x-4">
                            <label class="inline-flex items-center">
                                <input type="radio" name="tripType" value="one-way" 
                                       {{ old('tripType', 'one-way') == 'one-way' ? 'checked' : '' }} class="form-radio">
                                <span class="ml-2">One Way</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="tripType" value="round" 
                                       {{ old('tripType') == 'round' ? 'checked' : '' }} class="form-radio">
                                <span class="ml-2">Round Trip</span>
                            </label>
                        </div>
                        @error('tripType')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Pickup Address -->
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Pickup Address *</label>
                        <input type="text" name="pickupAddress" value="{{ old('pickupAddress') }}" 
                               required class="form-input w-full rounded-lg" placeholder="Enter full pickup address">
                        @error('pickupAddress')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Drop-off Address -->
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Drop-off Address *</label>
                        <input type="text" name="dropoffAddress" value="{{ old('dropoffAddress') }}" 
                               required class="form-input w-full rounded-lg" placeholder="Enter full drop-off address">
                        @error('dropoffAddress')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Pickup Date & Time -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Pickup Date *</label>
                        <input type="date" name="pickupDate" value="{{ old('pickupDate', date('Y-m-d', strtotime('+1 day'))) }}" 
                               required min="{{ date('Y-m-d') }}" class="form-input w-full rounded-lg">
                        @error('pickupDate')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Pickup Time *</label>
                        <input type="time" name="pickupTime" value="{{ old('pickupTime', '09:00') }}" 
                               required class="form-input w-full rounded-lg">
                        @error('pickupTime')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Return Date & Time (Conditional) -->
                    <div id="returnDateGroup" class="{{ old('tripType', 'one-way') == 'round' ? '' : 'hidden' }}">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Return Date *</label>
                        <input type="date" name="returnDate" value="{{ old('returnDate') }}" 
                               class="form-input w-full rounded-lg">
                        @error('returnDate')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div id="returnTimeGroup" class="{{ old('tripType', 'one-way') == 'round' ? '' : 'hidden' }}">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Return Time *</label>
                        <input type="time" name="returnTime" value="{{ old('returnTime') }}" 
                               class="form-input w-full rounded-lg">
                        @error('returnTime')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Passengers -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Passengers *</label>
                        <input type="number" name="passengers" value="{{ old('passengers', 1) }}" 
                               min="1" max="10" required class="form-input w-full rounded-lg">
                        @error('passengers')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Wheelchair -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Wheelchair Required *</label>
                        <select name="wheelchair" required class="form-select w-full rounded-lg">
                            <option value="no" {{ old('wheelchair', 'no') == 'no' ? 'selected' : '' }}>No</option>
                            <option value="yes" {{ old('wheelchair') == 'yes' ? 'selected' : '' }}>Yes</option>
                        </select>
                        @error('wheelchair')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Special Requirements -->
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Special Requirements</label>
                        <textarea name="specialRequirements" rows="2" class="form-textarea w-full rounded-lg">{{ old('specialRequirements') }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Step 2: Passenger Info -->
            <div id="step2" class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Passenger Information</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- First Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                        <input type="text" name="firstName" value="{{ old('firstName') }}" 
                               required class="form-input w-full rounded-lg">
                        @error('firstName')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Last Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                        <input type="text" name="lastName" value="{{ old('lastName') }}" 
                               required class="form-input w-full rounded-lg">
                        @error('lastName')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Phone -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                        <input type="tel" name="phone" value="{{ old('phone') }}" 
                               required class="form-input w-full rounded-lg" placeholder="(123) 456-7890">
                        @error('phone')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input type="email" name="email" value="{{ old('email') }}" 
                               class="form-input w-full rounded-lg" placeholder="you@example.com">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Preferred Contact -->
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Preferred Contact Method *</label>
                        <div class="flex space-x-6">
                            <label class="inline-flex items-center">
                                <input type="radio" name="preferredContact" value="phone" 
                                       {{ old('preferredContact', 'phone') == 'phone' ? 'checked' : '' }} class="form-radio">
                                <span class="ml-2">Phone</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="preferredContact" value="email" 
                                       {{ old('preferredContact') == 'email' ? 'checked' : '' }} class="form-radio">
                                <span class="ml-2">Email</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="preferredContact" value="text" 
                                       {{ old('preferredContact') == 'text' ? 'checked' : '' }} class="form-radio">
                                <span class="ml-2">Text</span>
                            </label>
                        </div>
                        @error('preferredContact')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Insurance Info -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Insurance Provider (Optional)</label>
                        <input type="text" name="insuranceProvider" value="{{ old('insuranceProvider') }}" 
                               class="form-input w-full rounded-lg">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Insurance ID (Optional)</label>
                        <input type="text" name="insuranceId" value="{{ old('insuranceId') }}" 
                               class="form-input w-full rounded-lg">
                    </div>
                </div>
            </div>

            <!-- Step 3: Additional Info -->
            <div id="step3" class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Additional Information</h2>
                
                <!-- Additional Notes -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Additional Notes</label>
                    <textarea name="additionalNotes" rows="4" class="form-textarea w-full rounded-lg">{{ old('additionalNotes') }}</textarea>
                </div>

                <!-- Terms & Privacy -->
                <div class="space-y-4">
                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="termsAccepted" value="1" 
                                   {{ old('termsAccepted') ? 'checked' : '' }} class="form-checkbox" required>
                            <span class="ml-2">I agree to the <a href="/terms" class="text-blue-600 hover:underline">Terms and Conditions</a> *</span>
                        </label>
                        @error('termsAccepted')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="privacyAccepted" value="1" 
                                   {{ old('privacyAccepted') ? 'checked' : '' }} class="form-checkbox" required>
                            <span class="ml-2">I agree to the <a href="/privacy" class="text-blue-600 hover:underline">Privacy Policy</a> *</span>
                        </label>
                        @error('privacyAccepted')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Estimated Cost Display -->
                <div class="mt-8 p-4 bg-blue-50 rounded-lg">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Estimated Cost</h3>
                            <p class="text-gray-600">Final price may vary based on actual distance and time</p>
                        </div>
                        <div class="text-right">
                            <div id="estimatedCostDisplay" class="text-3xl font-bold text-blue-600">$40.00</div>
                            <button type="button" onclick="calculateEstimate()" class="text-sm text-blue-600 hover:underline mt-1">
                                Recalculate Estimate
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-between pt-6">
                <button type="button" onclick="previousStep()" id="prevBtn" class="hidden px-6 py-3 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">
                    Previous
                </button>
                <button type="button" onclick="nextStep()" id="nextBtn" class="ml-auto px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Next
                </button>
                <button type="submit" id="submitBtn" class="hidden px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700">
                    Submit Booking
                </button>
            </div>
        </form>
    </div>
</div>

<script>
let currentStep = 1;
const totalSteps = 3;

function showStep(step) {
    // Hide all steps
    document.getElementById('step1').style.display = 'none';
    document.getElementById('step2').style.display = 'none';
    document.getElementById('step3').style.display = 'none';
    
    // Show current step
    document.getElementById(`step${step}`).style.display = 'block';
    
    // Update step indicator
    document.querySelectorAll('.flex-1').forEach((div, index) => {
        const number = div.querySelector('div');
        const text = div.querySelector('p');
        if (index < step) {
            number.classList.remove('bg-gray-200', 'text-gray-600');
            number.classList.add('bg-blue-600', 'text-white');
            text.classList.remove('text-gray-600');
            text.classList.add('text-blue-600');
        } else {
            number.classList.remove('bg-blue-600', 'text-white');
            number.classList.add('bg-gray-200', 'text-gray-600');
            text.classList.remove('text-blue-600');
            text.classList.add('text-gray-600');
        }
    });
    
    // Update buttons
    document.getElementById('prevBtn').style.display = step > 1 ? 'block' : 'none';
    document.getElementById('nextBtn').style.display = step < totalSteps ? 'block' : 'none';
    document.getElementById('submitBtn').style.display = step === totalSteps ? 'block' : 'none';
    
    currentStep = step;
}

function nextStep() {
    if (currentStep < totalSteps) {
        showStep(currentStep + 1);
    }
}

function previousStep() {
    if (currentStep > 1) {
        showStep(currentStep - 1);
    }
}

// Show/hide return date/time based on trip type
document.querySelectorAll('input[name="tripType"]').forEach(radio => {
    radio.addEventListener('change', function() {
        const isRoundTrip = this.value === 'round';
        document.getElementById('returnDateGroup').style.display = isRoundTrip ? 'block' : 'none';
        document.getElementById('returnTimeGroup').style.display = isRoundTrip ? 'block' : 'none';
        
        // Make required if round trip
        document.querySelector('input[name="returnDate"]').required = isRoundTrip;
        document.querySelector('input[name="returnTime"]').required = isRoundTrip;
    });
});

// Calculate estimate function
function calculateEstimate() {
    const formData = new FormData();
    formData.append('serviceType', document.querySelector('select[name="serviceType"]').value);
    formData.append('tripType', document.querySelector('input[name="tripType"]:checked').value);
    formData.append('passengers', document.querySelector('input[name="passengers"]').value);
    formData.append('wheelchair', document.querySelector('select[name="wheelchair"]').value);
    
    fetch('/booking/calculate-estimate', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            'Accept': 'application/json'
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.estimatedCost) {
            document.getElementById('estimatedCostDisplay').textContent = '$' + data.estimatedCost.toFixed(2);
        }
    })
    .catch(error => console.error('Error:', error));
}

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    showStep(1);
    
    // Recalculate estimate when form fields change
    document.querySelector('select[name="serviceType"]').addEventListener('change', calculateEstimate);
    document.querySelectorAll('input[name="tripType"]').forEach(radio => {
        radio.addEventListener('change', calculateEstimate);
    });
    document.querySelector('input[name="passengers"]').addEventListener('input', calculateEstimate);
    document.querySelector('select[name="wheelchair"]').addEventListener('change', calculateEstimate);
    
    // Initial calculation
    calculateEstimate();
});
</script>
