<x-mail::message>
# New Booking Received

A new booking has been submitted through the website.

## Booking Details
Reference: {{ $booking->booking_reference }}  
Customer: {{ $booking->first_name }} {{ $booking->last_name }}  
Phone: {{ $booking->phone }}  
Email: {{ $booking->email ?? 'Not provided' }}  

## Service Details
Service Type: {{ ucfirst($booking->service_type) }}  
Trip Type: {{ ucfirst($booking->trip_type) }}  
Pickup Address: {{ $booking->pickup_address }}  
Drop-off Address: {{ $booking->dropoff_address }}  

## Schedule
Pickup Date & Time: {{ $booking->pickup_datetime->format('F j, Y \a\t g:i A') }}  
@if($booking->return_datetime)
Return Date & Time: {{ $booking->return_datetime->format('F j, Y \a\t g:i A') }}  
@endif

## Additional Information
Passengers: {{ $booking->passengers }}  
Wheelchair Required: {{ $booking->wheelchair_required ? 'Yes' : 'No' }}  
@if($booking->special_requirements)
Special Requirements: {{ $booking->special_requirements }}  
@endif
@if($booking->insurance_provider)
Insurance Provider: {{ $booking->insurance_provider }}  
Insurance ID: {{ $booking->insurance_id }}  
@endif
@if($booking->additional_notes)
Additional Notes: {{ $booking->additional_notes }}  
@endif

Estimated Cost: ${{ number_format($booking->estimated_cost, 2) }}  
Status: {{ ucfirst($booking->status) }}  
Booking Date: {{ $booking->created_at->format('F j, Y \a\t g:i A') }}

<x-mail::button :url="url('/admin/bookings/'.$booking->id)">
View Booking in Admin Panel
</x-mail::button>

If you don't have an admin panel link, you can access the booking directly.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>