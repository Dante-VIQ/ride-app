<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Models\JobApplication;
use App\Models\CareerApplication;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewJobApplicationNotification extends Mailable implements ShouldQueue
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
            subject: '📋 New Job Application: ' . $this->application->application_number,
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.jobs.admin-notification',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}