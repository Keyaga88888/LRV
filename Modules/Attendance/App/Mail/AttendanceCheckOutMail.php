<?php

namespace Modules\Attendance\App\Mail;

use Illuminate\Mail\Mailable;
use Modules\Attendance\App\Models\Attendance;

class AttendanceCheckOutMail extends Mailable
{
    public function __construct(
        public Attendance $attendance
    ) {}

    public function build()
    {
        return $this
            ->subject('Check Out Success')
            ->view(
                'attendance::emails.check-out'
            );
    }
}
