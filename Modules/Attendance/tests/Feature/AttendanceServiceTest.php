<?php

namespace Modules\Attendance\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Attendance\App\Services\AttendanceService;
use Modules\User\App\Models\User;
use Tests\TestCase;

class AttendanceServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_service()
    {
        $user =
            User::factory()->create();

        $service =
            app(
                AttendanceService::class
            );

        $attendance =
            $service->create([

                'user_id' => $user->id,

                'work_date' => now(),

                'check_in' => now(),

                'check_out' => now()->addHours(9),

                'status' => 'present',
            ]);

        $this->assertNotNull(
            $attendance->id
        );
    }
}
