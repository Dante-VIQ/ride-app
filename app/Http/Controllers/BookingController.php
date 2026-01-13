<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\ServiceType;
use App\Mail\BookingConfirmation;
use App\Mail\NewBookingNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function showForm()
    {
        // Load service types
        $serviceTypes = ServiceType::where('active', true)
            ->orderBy('order')
            ->get();
            
        if ($serviceTypes->isEmpty()) {
            $serviceTypes = collect([
                ['id' => 'medical', 'name' => 'Medical Appointment', 'description' => 'Doctor visits, therapy, dialysis'],
                ['id' => 'errands', 'name' => 'Personal Errands', 'description' => 'Shopping, banking, pharmacy'],
                ['id' => 'social', 'name' => 'Social & Community', 'description' => 'Events, gatherings, religious services'],
                ['id' => 'corporate', 'name' => 'Corporate Transport', 'description' => 'Business meetings, airport transfers'],
                ['id' => 'event', 'name' => 'Special Event', 'description' => 'Weddings, concerts, celebrations'],
            ]);
        }
        
        return view('booking', compact('serviceTypes'));
    }
    
    public function calculateEstimate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'serviceType' => 'required|in:medical,errands,social,corporate,event,other',
            'tripType' => 'required|in:one-way,round',
            'passengers' => 'required|integer|min:1|max:10',
            'wheelchair' => 'required|in:yes,no',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['error' => 'Invalid input'], 400);
        }
        
        $baseCost = 0;
        
        // Base cost by service type
        switch ($request->serviceType) {
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
        if ($request->wheelchair === 'yes') {
            $baseCost += 10;
        }
        
        // Passenger surcharge
        if ($request->passengers > 1) {
            $baseCost += ($request->passengers - 1) * 5;
        }
        
        // Round trip surcharge
        if ($request->tripType === 'round') {
            $baseCost += 15;
        }
        
        return response()->json(['estimatedCost' => $baseCost]);
    }
    
    public function submitBooking(Request $request)
    {
        Log::info('Booking submission started', $request->all());
        
        // Validate all steps at once or use step-by-step validation
        $validator = Validator::make($request->all(), [
            // Step 1
            'serviceType' => 'required|in:medical,errands,social,corporate,event,other',
            'tripType' => 'required|in:one-way,round',
            'pickupAddress' => 'required|string|min:5|max:255',
            'dropoffAddress' => 'required|string|min:5|max:255',
            'pickupDate' => 'required|date|after_or_equal:today',
            'pickupTime' => 'required|date_format:H:i',
            'passengers' => 'required|integer|min:1|max:10',
            'wheelchair' => 'required|in:yes,no',
            
            // Step 2
            'firstName' => 'required|string|max:100',
            'lastName' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:100',
            'preferredContact' => 'required|in:phone,email,text',
            
            // Step 3
            'termsAccepted' => 'required|accepted',
            'privacyAccepted' => 'required|accepted',
        ], [
            'pickupDate.after_or_equal' => 'Pickup date must be today or later',
            'termsAccepted.accepted' => 'You must accept the terms and conditions',
            'privacyAccepted.accepted' => 'You must accept the privacy policy',
        ]);
        
        // Add conditional validation for round trips
        if ($request->tripType === 'round') {
            $validator->addRules([
                'returnDate' => 'required|date|after_or_equal:pickupDate',
                'returnTime' => 'required|date_format:H:i',
            ]);
        }
        
        if ($validator->fails()) {
            Log::error('Booking validation failed', $validator->errors()->toArray());
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        try {
            // Calculate estimated cost
            $estimatedCost = $this->calculateEstimatedCostFromRequest($request);
            
            // Create booking
            $booking = Booking::create([
                'service_type' => $request->serviceType,
                'trip_type' => $request->tripType,
                'pickup_address' => $request->pickupAddress,
                'dropoff_address' => $request->dropoffAddress,
                'pickup_datetime' => Carbon::parse($request->pickupDate . ' ' . $request->pickupTime),
                'return_datetime' => $request->tripType === 'round' && $request->returnDate 
                    ? Carbon::parse($request->returnDate . ' ' . $request->returnTime)
                    : null,
                'passengers' => (int) $request->passengers,
                'wheelchair_required' => $request->wheelchair === 'yes',
                'special_requirements' => $request->specialRequirements,
                'first_name' => $request->firstName,
                'last_name' => $request->lastName,
                'phone' => $request->phone,
                'email' => $request->email ?: null,
                'preferred_contact' => $request->preferredContact,
                'insurance_provider' => $request->insuranceProvider,
                'insurance_id' => $request->insuranceId,
                'additional_notes' => $request->additionalNotes,
                'estimated_cost' => $estimatedCost,
                'status' => 'pending',
                'booking_reference' => 'RA' . strtoupper(uniqid()),
            ]);
            
            Log::info('Booking created successfully', [
                'id' => $booking->id,
                'reference' => $booking->booking_reference
            ]);
            
            // Send emails in background using queue
            $this->sendBookingEmails($booking);
            
            // Store booking reference in session for confirmation page
            session()->flash('booking_reference', $booking->booking_reference);
            session()->flash('booking_success', true);
            
            return redirect()->route('booking.confirmation');
            
        } catch (\Exception $e) {
            Log::error('Booking creation failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return redirect()->back()
                ->with('error', 'There was an error submitting your booking. Please try again or call us directly.')
                ->withInput();
        }
    }
    
    private function calculateEstimatedCostFromRequest(Request $request)
    {
        $baseCost = 0;
        
        switch ($request->serviceType) {
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
        
        if ($request->wheelchair === 'yes') {
            $baseCost += 10;
        }
        
        if ($request->passengers > 1) {
            $baseCost += ($request->passengers - 1) * 5;
        }
        
        if ($request->tripType === 'round') {
            $baseCost += 15;
        }
        
        return $baseCost;
    }
    
    private function sendBookingEmails(Booking $booking)
    {
        try {
            // Send confirmation to customer
            if (!empty($booking->email)) {
                Mail::to($booking->email)
                    ->queue(new BookingConfirmation($booking));
                Log::info('Customer confirmation email queued', ['email' => $booking->email]);
            }
            
            // Send notification to admin
            $masterEmails = env('MASTER_EMAILS', '');
                $masterRecipients = array_filter(array_map('trim', explode(',', $masterEmails)));
            
            if (empty($masterRecipients)) {
                $masterRecipients = ['elijah@rideaidellc.com', 'admin@rideaidellc.com', 'info@rideaidellc.com'];
            }

            Mail::to($masterRecipients)
                ->queue(new NewBookingNotification($booking));
                    
     
            
        } catch (\Exception $e) {
            Log::error('Email queueing failed', [
                'error' => $e->getMessage(),
                'booking_id' => $booking->id
            ]);
            // Don't throw - emails failing shouldn't fail the booking
        }
    }
    
    public function showConfirmation()
    {
        if (!session()->has('booking_success')) {
            return redirect()->route('booking.form');
        }
        
        $bookingReference = session('booking_reference');
        

        return view('booking.confirmation', compact('bookingReference'));
    }
}