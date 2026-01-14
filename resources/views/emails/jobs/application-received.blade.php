<x-mail::message>
# Application Received

Dear {{ $application->first_name }},

Thank you for applying for the **{{ $application->job->title }}** position at {{ config('app.name') }}.

## Application Details
**Application Number:** {{ $application->application_number }}  
**Position:** {{ $application->job->title }}  
**Applied Date:** {{ $application->created_at->format('F j, Y') }}

## What Happens Next?
1. Our HR team will review your application
2. If your qualifications match our requirements, we'll contact you for an interview
3. The review process typically takes 5-7 business days

## Keep Your Application Number
Please keep your application number (**{{ $application->application_number }}**) for future reference.

## Need to Update Your Application?
If you need to update any information or upload additional documents, please reply to this email with your application number.

We appreciate your interest in joining our team!

Best regards,  
The {{ config('app.name') }} HR Team

<x-mail::button :url="route('home')">
Visit Our Website
</x-mail::button>
</x-mail::message>