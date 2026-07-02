<?php

namespace Modules\Attendance\App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Attendance\App\Models\Attendance;

class DashboardController extends Controller
{
    public function __invoke(): JsonResponse
    {
        $chart = Attendance::selectRaw('
                DATE(created_at) as date,
                COUNT(*) as total
            ')
            ->groupBy(DB::raw('DATE(created_at)'))
            ->orderBy('date')
            ->get();

        return response()->json([

            'total' => Attendance::count(),

            'today' => Attendance::today()->count(),

            'pending' => Attendance::pending()->count(),

            'approved' => Attendance::approved()->count(),

            'rejected' => Attendance::rejected()->count(),

            'labels' => $chart->pluck('date'),

            'chart' => $chart->pluck('total'),

        ]);
    }
}
