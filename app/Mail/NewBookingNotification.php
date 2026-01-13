<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewBookingNotification extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $booking;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '🚨 NEW BOOKING: ' . $this->booking->booking_reference . ' - ' . $this->booking->first_name . ' ' . $this->booking->last_name,
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.booking.notification',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}