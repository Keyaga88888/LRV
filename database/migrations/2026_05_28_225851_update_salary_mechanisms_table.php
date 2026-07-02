<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('salary_mechanisms', function (Blueprint $table) {

            // xoá cột cũ
            $table->dropColumn([
                'salary',
                'ot_day',
                'ot_hour',
                'responsibility',
                'enthusiasm',
                'support',
                'salary_keep',
                'salary_need_keep',
                'month_keep',
            ]);

            // thêm cột mới
            $table->decimal('basic_salary', 15, 2)->nullable();
            // 15→ tổng số chữ số |  2→ 2 số sau dấu phẩy | Ví dụ lưu được:25000000.50
            $table->decimal('allowance', 15, 2)->nullable();

            $table->decimal('bonus', 15, 2)->nullable();

            $table->decimal('insurance_deduction', 15, 2)->nullable();

            $table->decimal('tax_deduction', 15, 2)->nullable();

            $table->decimal('overtime_salary', 15, 2)->nullable();

            $table->decimal('late_penalty', 15, 2)->nullable();

            $table->integer('performance_score')->nullable();

            $table->text('note')->nullable();

            $table->date('salary_month')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('salary_mechanisms', function (Blueprint $table) {

            // xoá cột mới
            $table->dropColumn([
                'basic_salary',
                'allowance',
                'bonus',
                'insurance_deduction',
                'tax_deduction',
                'overtime_salary',
                'late_penalty',
                'performance_score',
                'note',
                'salary_month',
            ]);

            // trả lại cột cũ
            $table->integer('salary')->nullable();

            $table->integer('ot_day')->nullable();

            $table->integer('ot_hour')->nullable();

            $table->integer('responsibility')->nullable();

            $table->integer('enthusiasm')->nullable();

            $table->integer('support')->nullable();

            $table->integer('salary_keep')->nullable();

            $table->integer('salary_need_keep')->nullable();

            $table->integer('month_keep')->nullable();
        });
    }
};
