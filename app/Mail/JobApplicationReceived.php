<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Models\JobApplication;
use App\Models\CareerApplication;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;

class JobApplicationReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $application;

    public function __construct(CareerApplication $application)
    {
        $this->application = $application;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Job Application Received - ' . $this->application->application_number,
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.jobs.application-received',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}