<?php

namespace Modules\Attendance\App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Modules\User\App\Models\User;

class AttendanceApprovedMail extends Mailable
{
    use Queueable, SerializesModels;

    public User $user;

    public function __construct(
        User $user
    ) {
        $this->user = $user;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Attendance Approved'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'attendance::emails.attendance-approved'
        );
    }
}
// php artisan tinker

// Illuminate\Support\Facades\Mail::to($user->email)->send(new \App\Mail\AttendanceApprovedMail($user));

// Blade Email
// Nhiệm vụ : Template Email.
// Khai báo : Approved | Rejected | Check In | Check Out | Summary
// Luồng :
// Mail Class
// ↓
// Blade
// ↓
// SMTP
// ↓
// User
