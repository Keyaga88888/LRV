<?php

namespace Modules\Attendance\App\Mail;

use Illuminate\Mail\Mailable;
use Modules\User\App\Models\User;

class AttendanceRejectedMail extends Mailable
{
    public function __construct(
        public User $user
    ) {}

    public function build()
    {
        return $this
            ->subject('Attendance Rejected')
            ->view(
                'attendance::emails.rejected'
            );
    }
}
