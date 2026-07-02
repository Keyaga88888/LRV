<?php

namespace Modules\Salary\App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Modules\Salary\App\Models\SalaryMechanism;

/**
 * EXPORT EXCEL
 * -----------------------------------------
 * 📌 chuyển dữ liệu salary → file Excel
 */
class SalaryExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return SalaryMechanism::with(['user.part', 'user.position'])
            ->get()
            ->map(function ($item) {

                // tính tổng lương giống UI
                $total =
                    ($item->basic_salary ?? 0) +
                    ($item->allowance ?? 0) +
                    ($item->bonus ?? 0) +
                    ($item->overtime_salary ?? 0) -
                    ($item->insurance_deduction ?? 0) -
                    ($item->tax_deduction ?? 0) -
                    ($item->late_penalty ?? 0);

                return [
                    'id' => $item->id,
                    'employee_name' => $item->user->name ?? '',
                    'department' => $item->user->part->name ?? '',
                    'position' => $item->user->position->name ?? '',

                    'basic_salary' => $item->basic_salary,
                    'allowance' => $item->allowance,
                    'bonus' => $item->bonus,
                    'overtime_salary' => $item->overtime_salary,

                    'insurance_deduction' => $item->insurance_deduction,
                    'tax_deduction' => $item->tax_deduction,
                    'late_penalty' => $item->late_penalty,

                    'performance_score' => $item->performance_score,
                    'total_salary' => $total,

                    'created_at' => $item->created_at?->format('Y-m-d H:i:s'),
                ];
            });
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nhân viên',
            'Phòng ban',
            'Chức vụ',
            'Lương cơ bản',
            'Phụ cấp',
            'Thưởng',
            'Tăng ca',
            'BH trừ',
            'Thuế trừ',
            'Phạt đi trễ',
            'Điểm năng lực',
            'Tổng lương',
            'Ngày tạo',
        ];
    }
}
