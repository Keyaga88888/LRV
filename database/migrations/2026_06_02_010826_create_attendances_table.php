<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('attendances', function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->date('work_date');

            $table->dateTime('check_in')->nullable();

            $table->dateTime('check_out')->nullable();

            $table->integer('late_minutes')->default(0);

            $table->decimal('work_hours', 8, 2)->default(0);

            $table->decimal('overtime_hours', 8, 2)->default(0);

            $table->enum('status', [
                'present',
                'late',
                'absent',
                'leave',
            ])->default('present');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
}; // php artisan make:migration add_unique_user_workdate_to_attendances_table
