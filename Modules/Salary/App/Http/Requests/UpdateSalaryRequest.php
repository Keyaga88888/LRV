<?php

namespace Modules\Salary\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSalaryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'basic_salary' => 'nullable|numeric',
            'allowance' => 'nullable|numeric',
            'bonus' => 'nullable|numeric',
            'overtime_salary' => 'nullable|numeric',
            'insurance_deduction' => 'nullable|numeric',
            'tax_deduction' => 'nullable|numeric',
            'late_penalty' => 'nullable|numeric',

            'performance_score' => 'nullable|numeric|min:0|max:120',
        ];
    }
}
