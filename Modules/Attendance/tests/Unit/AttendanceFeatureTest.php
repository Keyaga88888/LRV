<?php

namespace Modules\Attendance\Tests\Unit;

use Modules\Attendance\App\Services\AttendanceCalculator;
use Tests\TestCase;

class AttendanceFeatureTest extends TestCase
{
    public function test_attendance_calculator_late_minutes()
    {
        $result = AttendanceCalculator::calculate(
            '2026-06-04 08:30:00',
            '2026-06-04 17:00:00'
        );

        $this->assertEquals(
            30,
            $result['late_minutes']
        );
    }

    public function test_attendance_calculator_work_hours()
    {
        $result = AttendanceCalculator::calculate(
            '2026-06-04 08:00:00',
            '2026-06-04 17:00:00'
        );

        $this->assertEquals(
            9,
            $result['work_hours']
        );
    }

    public function test_attendance_calculator_overtime()
    {
        $result = AttendanceCalculator::calculate(
            '2026-06-04 08:00:00',
            '2026-06-04 19:00:00'
        );

        $this->assertEquals(
            3,
            $result['overtime_hours']
        );
    }

    public function test_attendance_calculator_without_checkout()
    {
        $result = AttendanceCalculator::calculate(
            '2026-06-04 08:00:00',
            null
        );

        $this->assertEquals(
            0,
            $result['work_hours']
        );

        $this->assertEquals(
            0,
            $result['overtime_hours']
        );
    }

    public function test_attendance_calculator_without_checkin()
    {
        $result = AttendanceCalculator::calculate(
            null,
            null
        );

        $this->assertEquals(
            0,
            $result['late_minutes']
        );

        $this->assertEquals(
            0,
            $result['work_hours']
        );

        $this->assertEquals(
            0,
            $result['overtime_hours']
        );
    }
}
