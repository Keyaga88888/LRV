<?php

namespace Modules\Attendance\App\Mail;

use Illuminate\Mail\Mailable;

class AttendanceExportReady extends Mailable
{
    public string $file;

    public function __construct(
        string $file
    ) {
        $this->file = $file;
    }

    public function build()
    {
        return $this
            ->subject('Attendance Export Ready')
            ->view(
                'attendance::emails.attendance_export'
            )
            ->attach(
                storage_path(
                    'app/public/'.$this->file
                )
            );
    }
}
