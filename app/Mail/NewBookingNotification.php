<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;

class NewBookingNotification extends Mailable
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
            subject: 'New Booking Notification - ' . $this->booking->booking_reference,
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.booking.notification',
            with: [
                'booking' => $this->booking
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}