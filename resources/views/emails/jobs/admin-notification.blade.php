<x-mail::message>
# 📋 New Job Application Received

A new job application has been submitted through the website.

## Application Details
**Application Number:** {{ $application->application_number }}  
**Applicant:** {{ $application->first_name }} {{ $application->last_name }}  
**Position:** {{ $application->job->title }}  
**Email:** {{ $application->email }}  
**Phone:** {{ $application->phone }}  
**Applied:** {{ $application->created_at->format('F j, Y H:i') }}

## Quick Actions
<x-mail::button :url="route('admin.jobs.applications.show', $application)">
View Application
</x-mail::button>

Thanks,  
{{ config('app.name') }} System
</x-mail::message>