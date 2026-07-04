<?php

namespace Modules\Attendance\App\Transformers;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AttendanceCollection extends ResourceCollection
{
    public function toArray($request)// cái này cho phép xuất ra data table
    {
        return [

            'data' => AttendanceResource::collection(
                $this->collection
            ),

            'total' => $this->total(),

            'current_page' => $this->currentPage(),

            'last_page' => $this->lastPage(),
        ];
    }
}
// file này đang dư
