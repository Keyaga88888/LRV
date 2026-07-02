<?php

namespace Modules\Attendance\App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;
use Modules\Attendance\App\Mail\AttendanceApprovedMail;
use Modules\User\App\Models\User;

class SendAttendanceApprovedMailJob implements ShouldQueue
{
    use Queueable;

    public User $user;

    public function __construct(
        User $user
    ) {
        $this->user = $user;
    }

    public function handle(): void
    {
        Mail::to(
            $this->user->email
        )->send(
            new AttendanceApprovedMail(
                $this->user
            )
        );
    }
}
