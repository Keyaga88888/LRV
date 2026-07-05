<?php

namespace Modules\Attendance\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Attendance\App\Models\Attendance;
use Modules\Attendance\App\Services\AttendanceService;
use Modules\User\App\Models\User;
use Tests\TestCase;

class AttendanceServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_service()
    {
        /** @var User $user */
        $user = User::factory()->create();

        /** @var Attendance $attendance */
        $attendance = app(AttendanceService::class)->create([
            'user_id' => $user->id,
            'work_date' => now(),
            'check_in' => now(),
            'check_out' => now()->addHours(9),
            'status' => 'present',
        ]);

        $this->assertGreaterThan(0, $attendance->id);
    }
}
