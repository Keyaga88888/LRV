<?php

namespace Modules\Attendance\App\Application\Handlers;

use Modules\Attendance\App\Application\Queries\GetAttendanceDataQuery;
use Modules\Attendance\App\Models\Attendance;

class GetAttendanceDataHandler
{
    public function handle(GetAttendanceDataQuery $query)
    {
        // return Attendance::query()

        //     ->select([
        //         ...
        //     ])

        //     ->leftJoin(...)

        //     ->leftJoin(...)

        //     ->leftJoin(...);
    }
}
// function data
// Controller.php|function index > GetAttendanceListQuery.php > GetAttendanceListHandler.php

// Controller sẽ thành:

// public function data(
//     GetAttendanceDataHandler $handler
// )
// {
//     $query = $handler->handle(
//         new GetAttendanceDataQuery()
//     );

//     $factory = app(DataTables::class);

//     return $factory
//         ->eloquent($query)

//         ->filterColumn(...)

//         ->addColumn(...)

//         ->rawColumns(...)

//         ->make(true);
// }

// Application
// │
// ├── Queries
// │      GetAttendanceDataQuery.php
// │
// ├── Handlers
// │      GetAttendanceDataHandler.php
// │
// ├── Transformers
// │      AttendanceDataTableTransformer.php   <-- có thể thêm sau
