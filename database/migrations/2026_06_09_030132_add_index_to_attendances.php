<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table(
            'attendances',
            function (Blueprint $table) {

                $table->index('user_id');

                $table->index('work_date');

                $table->index('status');

                $table->index([
                    'user_id',
                    'work_date',
                ]);
            }
        );
    }

    public function down(): void
    {
        Schema::table(
            'attendances',
            function (Blueprint $table) {

                $table->dropIndex(
                    ['user_id']
                );

                $table->dropIndex(
                    ['work_date']
                );

                $table->dropIndex(
                    ['status']
                );

                $table->dropIndex(
                    ['user_id', 'work_date']
                );
            }
        );
    }
};
