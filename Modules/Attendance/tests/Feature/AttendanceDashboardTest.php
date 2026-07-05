<?php

namespace Modules\Attendance\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Attendance\App\Models\Attendance;
use Modules\Attendance\App\Services\AttendanceDashboardService;
use Modules\User\App\Models\User;
use Tests\TestCase;

class AttendanceDashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_dashboard_stats()
    {
        /** @var User $user */
        $user = User::factory()->create();

        Attendance::factory()
            ->count(5)
            ->create([
                'user_id' => $user->id,
            ]);

        $stats = app(AttendanceDashboardService::class)->stats();

        $this->assertEquals(5, $stats['total']);
    }
}
