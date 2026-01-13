<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\Booking;
use Livewire\Component;
use App\Models\ServiceType;
use App\Mail\BookingConfirmation;
use Illuminate\Support\Facades\Log;
use App\Mail\NewBookingNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class BookingForm extends Component
{
    // Form steps
    public $currentStep = 1;

    // Step 1: Ride Details
    public $serviceType = '';
    public $tripType = 'one-way';
    public $pickupAddress = '';
    public $dropoffAddress = '';
    public $pickupDate = '';
    public $pickupTime = '';
    public $returnDate = '';
    public $returnTime = '';
    public $passengers = 1;
    public $wheelchair = 'no';
    public $specialRequirements = '';

    // Step 2: Passenger Info
    public $firstName = '';
    public $lastName = '';
    public $phone = '';
    public $email = '';
    public $preferredContact = 'phone';
    public $insuranceProvider = '';
    public $insuranceId = '';

    // Step 3: Additional Info
    public $additionalNotes = '';
    public $termsAccepted = false;
    public $privacyAccepted = false;

    // Form state
    public $isSubmitting = false;
    public $bookingSubmitted = false;
    public $bookingId = null;
    public $estimatedCost = 0;

    // Available service types
    public $serviceTypes = [];

    public function mount()
    {
        // Load service types from database or use defaults
        $this->serviceTypes = ServiceType::where('active', true)->orderBy('order')->get()->toArray();

        // If no service types in database, use defaults
        if (empty($this->serviceTypes)) {
            $this->serviceTypes = [['id' => 'medical', 'name' => 'Medical Appointment', 'description' => 'Doctor visits, therapy, dialysis'], ['id' => 'errands', 'name' => 'Personal Errands', 'description' => 'Shopping, banking, pharmacy'], ['id' => 'social', 'name' => 'Social & Community', 'description' => 'Events, gatherings, religious services'], ['id' => 'corporate', 'name' => 'Corporate Transport', 'description' => 'Business meetings, airport transfers'], ['id' => 'event', 'name' => 'Special Event', 'description' => 'Weddings, concerts, celebrations']];
        }

        // Set default dates
        $this->pickupDate = Carbon::now()->addDay()->format('Y-m-d');
        $this->pickupTime = '09:00';
    }

    public function render()
    {
        // Calculate estimated cost
        $this->calculateEstimatedCost();

        return view('livewire.booking-form');
    }

    public function calculateEstimatedCost()
    {
        $baseCost = 0;

        // Base cost by service type
        switch ($this->serviceType) {
            case 'medical':
                $baseCost = 45;
                break;
            case 'errands':
                $baseCost = 35;
                break;
            case 'social':
                $baseCost = 30;
                break;
            case 'corporate':
                $baseCost = 55;
                break;
            case 'event':
                $baseCost = 60;
                break;
            default:
                $baseCost = 40;
        }

        // Wheelchair surcharge
        if ($this->wheelchair === 'yes') {
            $baseCost += 10;
        }

        // Passenger surcharge
        $passengerCount = (int) $this->passengers;
        if ($passengerCount > 1) {
            $baseCost += ($passengerCount - 1) * 5;
        }

        // Round trip surcharge
        if ($this->tripType === 'round') {
            $baseCost += 15;
        }

        $this->estimatedCost = $baseCost;
    }

    public function nextStep()
    {
        if ($this->currentStep === 1) {
            $this->validateStep1();
        } elseif ($this->currentStep === 2) {
            $this->validateStep2();
        }

        $this->currentStep++;
    }

    public function previousStep()
    {
        $this->currentStep--;
    }

    protected function validateStep1()
    {
        $this->validate(
            [
                'serviceType' => 'required|in:medical,errands,social,corporate,event,other',
                'tripType' => 'required|in:one-way,round',
                'pickupAddress' => 'required|string|min:5|max:255',
                'dropoffAddress' => 'required|string|min:5|max:255',
                'pickupDate' => 'required|date|after_or_equal:today',
                'pickupTime' => 'required|date_format:H:i',
                'passengers' => 'required|integer|min:1|max:10',
                'wheelchair' => 'required|in:yes,no',
            ],
            [
                'serviceType.required' => 'Please select a service type',
                'pickupAddress.required' => 'Pickup address is required',
                'dropoffAddress.required' => 'Drop-off address is required',
                'pickupDate.required' => 'Pickup date is required',
                'pickupDate.after_or_equal' => 'Pickup date must be today or later',
                'pickupTime.required' => 'Pickup time is required',
            ],
        );

        if ($this->tripType === 'round') {
            $this->validate(
                [
                    'returnDate' => 'required|date|after_or_equal:pickupDate',
                    'returnTime' => 'required|date_format:H:i',
                ],
                [
                    'returnDate.required' => 'Return date is required for round trips',
                    'returnDate.after_or_equal' => 'Return date must be on or after pickup date',
                    'returnTime.required' => 'Return time is required for round trips',
                ],
            );
        }
    }

    protected function validateStep2()
    {
        $this->validate(
            [
                'firstName' => 'required|string|max:100',
                'lastName' => 'required|string|max:100',
                'phone' => 'required|string|max:20',
                'email' => 'nullable|email|max:100',
                'preferredContact' => 'required|in:phone,email,text',
                'insuranceProvider' => 'nullable|string|max:100',
                'insuranceId' => 'nullable|string|max:50',
            ],
            [
                'firstName.required' => 'First name is required',
                'lastName.required' => 'Last name is required',
                'phone.required' => 'Phone number is required',
                'email.email' => 'Please enter a valid email address',
            ],
        );
    }

    public function submitBooking()
    {
        $this->validate(
            [
                'termsAccepted' => 'accepted',
                'privacyAccepted' => 'accepted',
            ],
            [
                'termsAccepted.accepted' => 'You must accept the terms and conditions',
                'privacyAccepted.accepted' => 'You must accept the privacy policy',
            ],
        );

        $this->isSubmitting = true;

        try {
            // Create booking
            $booking = Booking::create([
                'service_type' => $this->serviceType,
                'trip_type' => $this->tripType,
                'pickup_address' => $this->pickupAddress,
                'dropoff_address' => $this->dropoffAddress,
                'pickup_datetime' => Carbon::parse($this->pickupDate . ' ' . $this->pickupTime),
                'return_datetime' => $this->tripType === 'round' ? Carbon::parse($this->returnDate . ' ' . $this->returnTime) : null,
                'passengers' => (int) $this->passengers, // Ensure integer
                'wheelchair_required' => $this->wheelchair === 'yes',
                'special_requirements' => $this->specialRequirements,
                'first_name' => $this->firstName,
                'last_name' => $this->lastName,
                'phone' => $this->phone,
                'email' => $this->email ?: null, // Ensure null if empty
                'preferred_contact' => $this->preferredContact,
                'insurance_provider' => $this->insuranceProvider ?: null,
                'insurance_id' => $this->insuranceId ?: null,
                'additional_notes' => $this->additionalNotes,
                'estimated_cost' => (float) $this->estimatedCost, // Ensure float
                'status' => 'pending',
                'booking_reference' => 'RA' . strtoupper(uniqid()),
            ]);

            $this->bookingId = $booking->id;

            if (!empty($this->email)) {
                try {
                    Log::info('Attempting to send confirmation email to: ' . $this->email);

                    Mail::to($this->email)->send(new BookingConfirmation($booking));

                    Log::info('Confirmation email sent successfully to: ' . $this->email);
                } catch (\Exception $emailError) {
                    Log::error('Confirmation email failed for ' . $this->email . ': ' . $emailError->getMessage());
                    Log::error('Email error trace: ', $emailError->getTrace());

                    // Still continue - don't fail the booking
                    session()->flash('warning', 'Booking created but confirmation email failed. We will contact you shortly.');
                }
            } else {
                Log::info('No customer email provided, skipping confirmation email');
            }

            // Email 2: Notification to admin/master emails
            try {
                // Get master emails from .env
                $masterEmails = env('MASTER_EMAILS', 'damalide20@gmail.com');
                Log::info('MASTER_EMAILS from .env: ' . $masterEmails);

                $masterRecipients = array_filter(array_map('trim', explode(',', $masterEmails)));

                // Fallback to a sensible default if MASTER_EMAILS not set or empty
                if (empty($masterRecipients)) {
                    $masterRecipients = ['damalide20@gmail.com'];
                    Log::warning('MASTER_EMAILS empty, using default: damalide20@gmail.com');
                }

                Log::info('Sending admin notification to: ' . implode(', ', $masterRecipients));

                foreach ($masterRecipients as $recipient) {
                    if (filter_var($recipient, FILTER_VALIDATE_EMAIL)) {
                        Mail::to($recipient)->send(new NewBookingNotification($booking));
                        Log::info('Admin notification sent to: ' . $recipient);
                    } else {
                        Log::error('Invalid email in MASTER_EMAILS: ' . $recipient);
                    }
                }
            } catch (\Exception $adminEmailError) {
                Log::error('Admin notification email failed: ' . $adminEmailError->getMessage());
                Log::error('Admin email error trace: ', $adminEmailError->getTrace());

                // Still continue - don't fail the booking
                session()->flash('warning', 'Booking created but admin notification failed.');
            }

            $this->bookingSubmitted = true;
        } catch (\Exception $e) {
            Log::error('Booking submission error: ' . $e->getMessage());
            Log::error('Booking submission error trace: ' . $e->getTraceAsString());

            session()->flash('error', 'There was an error submitting your booking. Please try again or call us directly.');
            $this->isSubmitting = false;
            return;
        }

        $this->isSubmitting = false;
    }

    public function resetForm()
    {
        $this->reset();
        $this->mount();
        $this->currentStep = 1;
    }
}
