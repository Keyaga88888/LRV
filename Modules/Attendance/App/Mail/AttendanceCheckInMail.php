<?php

namespace Modules\Attendance\App\Mail;

use Illuminate\Mail\Mailable;
use Modules\User\App\Models\User;

class AttendanceCheckInMail extends Mailable
{
    public function __construct(
        public User $user
    ) {}

    public function build()
    {
        return $this
            ->subject('Check In Success')
            ->view(
                'attendance::emails.check-in'
            );
    }
}
