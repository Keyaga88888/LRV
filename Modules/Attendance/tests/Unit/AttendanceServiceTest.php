<?php

namespace Modules\Attendance\Tests\Unit;

use Modules\Attendance\App\Services\AttendanceService;
use Tests\TestCase;

class AttendanceServiceTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_service_can_be_resolved(): void
    {
        $service = app(AttendanceService::class);

        $this->assertInstanceOf(
            AttendanceService::class,
            $service
        );
    }
}
