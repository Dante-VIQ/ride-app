@component('mail::message')
    # Booking Confirmation

    Dear {{ $booking->first_name }},

    Thank you for booking with Ride Aide LLC. Your transportation request has been received and is being processed.

    Booking Details:
    - Reference: {{ $booking->booking_reference }}
    - Service: {{ ucfirst($booking->service_type) }} Transportation
    - Pickup: {{ $booking->pickup_address }}
    - Drop-off: {{ $booking->dropoff_address }}
    - Date/Time: {{ $booking->formatted_pickup_time }}
    - Passengers: {{ $booking->passengers }}
    - Wheelchair: {{ $booking->wheelchair_required ? 'Yes' : 'No' }}
    - Estimated Cost: {{ $booking->formatted_estimated_cost }}

    What happens next?
    1. Our dispatch team will call you within 1 hour to confirm your booking
    2. You'll receive a confirmation with driver details
    3. The driver will call 15 minutes before your scheduled pickup time

    Need to make changes?
    To modify or cancel your booking, please call our dispatch at (206) 555-1234 and provide your booking reference.

    Thank you for choosing Ride Aide LLC for your transportation needs.

    Best regards,
    The Ride Aide LLC Team

    @component('mail::subcopy')
        This is an automated confirmation. Please do not reply to this email.
        For immediate assistance, call our dispatch at (206) 555-1234.
    @endcomponent
@endcomponent