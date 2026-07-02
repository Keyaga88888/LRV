<?php

namespace Modules\Attendance\App\Repositories;

use Modules\Attendance\App\Models\Attendance;

class AttendanceRepository implements AttendanceRepositoryInterface
{
    public function getAll()
    {
        // return Attendance::with('user')->get();
        return cache()->remember(
            'attendance_all',
            3600,
            fn () => Attendance::with([
                'user:id,name',
            ])->get()
        );
    }

    public function find($id)
    {
        return Attendance::findOrFail($id);
    }

    public function create(array $data)
    {
        return Attendance::create($data);
    }

    public function update($id, array $data)
    {
        return $this
            ->find($id)
            ->update($data);
    }

    public function delete($id)
    {
        return $this
            ->find($id)
            ->delete();
    }

    public function paginate(
        int $perPage = 20
    ) {
        return Attendance::with('user')
            ->paginate($perPage);
    }

    public function findByUser(
        int $userId
    ) {
        return Attendance::query()
            ->where('user_id', $userId)
            ->latest()
            ->get();
    }

    public function findToday()
    {
        return Attendance::query()
            ->whereDate(
                'work_date',
                today()
            )
            ->get();
    }

    public function summaryToday()
    {
        return Attendance::query()
            ->selectRaw('
            status,
            count(*) as total
        ')
            ->whereDate(
                'work_date',
                today()
            )
            ->groupBy('status')
            ->pluck(
                'total',
                'status'
            );
    }
}
