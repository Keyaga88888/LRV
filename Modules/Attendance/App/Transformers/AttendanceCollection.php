<?php

namespace Modules\Attendance\App\Transformers;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AttendanceCollection extends ResourceCollection
{
    public function toArray($request)// cái này cho phép xuất ra data table
    {
        return [

            'data' => $this->collection,

            'links' => [
                'first' => $this->resource->url(1),
                'last' => $this->resource->url($this->resource->lastPage()),
            ],

            'meta' => [
                'current_page' => $this->resource->currentPage(),
                'last_page' => $this->resource->lastPage(),
                'total' => $this->resource->total(),
            ],
        ];
    }
}
// file này đang dư

// Nhiệm vụ :  Format dữ liệu Collection trả về API.
// Khai báo : data | links | meta
// Luồng : AttendanceController > paginate() > AttendanceCollection > JSON
