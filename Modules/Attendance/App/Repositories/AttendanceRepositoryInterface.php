<?php

namespace Modules\Attendance\App\Repositories;

interface AttendanceRepositoryInterface
{
    public function getAll();

    public function find($id);

    public function create(array $data);

    public function update($id, array $data);

    public function delete($id);

    public function paginate(
        int $perPage = 20
    );

    public function findByUser(
        int $userId
    );

    public function findToday();

    public function summaryToday();
}
