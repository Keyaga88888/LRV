<?php

namespace Modules\Attendance\App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AttendanceCreatedNotification extends Notification implements ShouldQueue
{
    use Queueable;
    // AttendanceCreatedNotification.php: Notification. Có thể gửi:Database | Mail | Broadcast

    public function via(
        object $notifiable
    ): array {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Attendance Created notification')
            ->line('Attendance Created Successfully');
    }

    public function toArray(
        object $notifiable
    ): array {
        return [
            'title' => 'Attendance Created notification',

            'message' => 'New attendance record created'];
    }
}
// php artisan module:make-notification AttendanceCreatedNotification Attendance
// phải chạy :
// php artisan horizon
