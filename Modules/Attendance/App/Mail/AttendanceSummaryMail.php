<?php

namespace Modules\Attendance\App\Mail;

use Illuminate\Mail\Mailable;

class AttendanceSummaryMail extends Mailable
{
    public function __construct(
        public array $data
    ) {}

    public function build()
    {
        return $this
            ->subject(
                'Attendance Daily Summary'
            )
            ->view(
                'attendance::emails.summary'
            );
    }
}
