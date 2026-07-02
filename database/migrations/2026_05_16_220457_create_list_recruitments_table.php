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
        Schema::create('list_recruitments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recruitment_id')->nullable()->constrained('recruitments')->cascadeOnUpdate()->nullOnDelete();
            $table->dateTime('day')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->date('birthday')->nullable();
            $table->unsignedTinyInteger('interview')->default(0)->comment('0: không,1: có');
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnUpdate()->nullOnDelete(); // constrained() liên kết tới bảng | cascadeOnUpdate() để id trong bảng parts có thay đổi thì id part_id thay đổi theo |  nullOnDelete() khi xoá id trong bảng parts thì id part_id sẽ trở thành null , nếu ko có lệnh thì khi xoá id bảng chính thì bẳng phụ nó sẽ báo lỗi và phải xoá id phụ thì chính mới dc xoá  | nullable() dc phép null
            $table->unsignedTinyInteger('result')->default(0)->comment('0: không đạt,1: đạt');
            $table->dateTime('day_work')->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_recruitments');
    }
};
