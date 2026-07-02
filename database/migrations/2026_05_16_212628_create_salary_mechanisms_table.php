<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('salary_mechanisms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnUpdate()->nullOnDelete(); // constrained() liên kết tới bảng | cascadeOnUpdate() để id trong bảng parts có thay đổi thì id part_id thay đổi theo |  nullOnDelete() khi xoá id trong bảng parts thì id part_id sẽ trở thành null , nếu ko có lệnh thì khi xoá id bảng chính thì bẳng phụ nó sẽ báo lỗi và phải xoá id phụ thì chính mới dc xoá  | nullable() dc phép null
            $table->integer('salary')->nullable(); // integer() kiểu int
            $table->integer('ot_day')->nullable(); // integer() kiểu int
            $table->integer('ot_hour')->nullable(); // integer() kiểu int
            $table->integer('responsibility')->nullable(); // integer() kiểu int
            $table->integer('enthusiasm')->nullable(); // integer() kiểu int
            $table->integer('support')->nullable(); // integer() kiểu int
            $table->integer('salary_keep')->nullable(); // integer() kiểu int
            $table->integer('salary_need_keep')->nullable(); // integer() kiểu int
            $table->integer('month_keep')->nullable(); // integer() kiểu int
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salary_mechanisms');
    }
};
