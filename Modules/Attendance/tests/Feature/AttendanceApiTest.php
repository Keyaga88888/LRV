<?php

namespace Modules\Attendance\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Modules\Attendance\App\Models\Attendance;
use Modules\User\App\Models\User;
use Tests\TestCase;

class AttendanceApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_attendance_api_can_create()
    {
        $user = User::factory()->create();

        Sanctum::actingAs($user);

        $response = $this->postJson('/api/v1/attendances', [
            'user_id' => $user->id,
            'work_date' => now()->toDateString(),
            'check_in' => now(),
            'check_out' => now()->addHours(8),
            'status' => 'present',
        ]);

        $response->assertOk();
    }

    public function test_attendance_api_list()
    {
        $user = User::factory()->create();

        $user->givePermissionTo(
            'attendance.view'
        );

        Attendance::factory()->count(3)->create([
            'user_id' => $user->id,
        ]);

        Sanctum::actingAs($user);

        $response = $this->getJson(
            '/api/v1/attendances'
        );

        $response
            ->assertOk()
            ->assertJsonStructure([
                'data',
                'links',
                'meta',
            ]);
    }

    public function test_attendance_api_requires_authentication()
    {
        $response = $this->getJson(
            '/api/v1/attendances'
        );

        $response->assertUnauthorized();
    }

    public function test_attendance_api_requires_permission()
    {
        $user = User::factory()->create();

        Sanctum::actingAs($user);

        $response = $this->getJson(
            '/api/v1/attendances'
        );

        $response->assertForbidden();
    }
}
