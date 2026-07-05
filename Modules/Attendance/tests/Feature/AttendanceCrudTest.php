<?php

namespace Modules\Attendance\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Attendance\App\Models\Attendance;
use Modules\User\App\Models\User;
use Tests\TestCase;

class AttendanceCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_attendance()
    {
        /** @var User $user */
        $user = User::factory()->create();

        /** @var Attendance $attendance */
        $attendance = Attendance::create([
            'user_id' => $user->id,
            'work_date' => now(),
            'check_in' => now(),
            'check_out' => now()->addHours(8),
            'late_minutes' => 0,
            'work_hours' => 8,
            'overtime_hours' => 0,
            'status' => 'present',
        ]);

        $this->assertDatabaseHas('attendances', [
            'id' => $attendance->id,
        ]);
    }

    public function test_update_attendance()
    {
        /** @var User $user */
        $user = User::factory()->create();

        /** @var Attendance $attendance */
        $attendance = Attendance::create([
            'user_id' => $user->id,
            'work_date' => now(),
            'check_in' => now(),
            'check_out' => now(),
            'late_minutes' => 0,
            'work_hours' => 8,
            'overtime_hours' => 0,
            'status' => 'present',
        ]);

        $attendance->update([
            'status' => 'late',
        ]);

        $this->assertDatabaseHas('attendances', [
            'id' => $attendance->id,
            'status' => 'late',
        ]);
    }

    public function test_delete_attendance()
    {
        /** @var User $user */
        $user = User::factory()->create();

        /** @var Attendance $attendance */
        $attendance = Attendance::create([
            'user_id' => $user->id,
            'work_date' => now(),
            'check_in' => now(),
            'check_out' => now(),
            'late_minutes' => 0,
            'work_hours' => 8,
            'overtime_hours' => 0,
            'status' => 'present',
        ]);

        $attendance->delete();

        $this->assertDatabaseMissing('attendances', [
            'id' => $attendance->id,
        ]);
    }
}
