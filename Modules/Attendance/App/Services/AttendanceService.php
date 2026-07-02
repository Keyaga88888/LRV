<?php

namespace Modules\Attendance\App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Modules\Attendance\App\Events\AttendanceCreated;
use Modules\Attendance\App\Models\Attendance;
use Modules\Attendance\App\Repositories\AttendanceRepositoryInterface;
use Modules\Attendance\App\Services\Contracts\AttendanceServiceInterface;

class AttendanceService implements AttendanceServiceInterface
{
    public function getDashboard(): array
    {
        return app(
            AttendanceSummaryService::class
        )->summaryToday();
    }

    public function findUserAttendance(
        int $userId
    ) {
        return app(
            AttendanceRepositoryInterface::class
        )->findByUser(
            $userId
        );
    }

    // Attendance::where('user_id',$data['user_id'])->whereDate('work_date',$data['work_date'])->exists();
    public function create(array $data): Attendance
    {
        logger()->info('ATTENDANCE SERVICE CREATE');
        if (
            Attendance::where(
                'user_id',
                $data['user_id']
            )
                ->whereDate(
                    'work_date',
                    $data['work_date']
                )
                ->exists()
        ) {
            throw ValidationException::withMessages([
                'work_date' => 'Attendance already exists',
            ]);
        }

        return DB::transaction(function () use ($data) {

            $calc = AttendanceCalculator::calculate(
                $data['check_in'] ?? null,
                $data['check_out'] ?? null
            );

            $attendance = Attendance::create([

                'user_id' => $data['user_id'],
                'work_date' => $data['work_date'],

                'check_in' => $data['check_in'] ?? null,
                'check_out' => $data['check_out'] ?? null,

                'late_minutes' => $calc['late_minutes'],
                'work_hours' => $calc['work_hours'],
                'overtime_hours' => $calc['overtime_hours'],

                'status' => $data['status'],
            ]);

            logger()->info('BEFORE EVENT');

            event(new AttendanceCreated($attendance)); // nếu không chạy thì kiểm tra projec có trở đúng file .log ko

            logger()->info('AFTER EVENT');

            return $attendance;
        });
    } // php artisan queue:work

    public function update(
        Attendance $attendance,
        array $data
    ): Attendance {

        $calc = AttendanceCalculator::calculate(
            $data['check_in'] ?? null,
            $data['check_out'] ?? null
        );

        $attendance->update([

            'check_in' => $data['check_in'] ?? null,
            'check_out' => $data['check_out'] ?? null,

            'late_minutes' => $calc['late_minutes'],
            'work_hours' => $calc['work_hours'],
            'overtime_hours' => $calc['overtime_hours'],

            'status' => $data['status'],
        ]);

        return $attendance->fresh();
    }
}
