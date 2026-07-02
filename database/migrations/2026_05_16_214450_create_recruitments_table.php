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
        Schema::create('recruitments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('part_id')->nullable()->constrained('parts')->cascadeOnUpdate()->nullOnDelete(); // constrained() liên kết tới bảng | cascadeOnUpdate() để id trong bảng parts có thay đổi thì id part_id thay đổi theo |  nullOnDelete() khi xoá id trong bảng parts thì id part_id sẽ trở thành null , nếu ko có lệnh thì khi xoá id bảng chính thì bẳng phụ nó sẽ báo lỗi và phải xoá id phụ thì chính mới dc xoá  | nullable() dc phép null
            $table->foreignId('position_id')->nullable()->constrained('positions')->cascadeOnUpdate()->nullOnDelete(); // constrained() liên kết tới bảng | cascadeOnUpdate() để id trong bảng parts có thay đổi thì id part_id thay đổi theo |  nullOnDelete() khi xoá id trong bảng parts thì id part_id sẽ trở thành null , nếu ko có lệnh thì khi xoá id bảng chính thì bẳng phụ nó sẽ báo lỗi và phải xoá id phụ thì chính mới dc xoá  | nullable() dc phép null
            $table->integer('number')->nullable();
            $table->unsignedTinyInteger('prioritize')->default(0)->comment('o: thấp,1: trung bình,2: cao');
            $table->datetime('deadline')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnUpdate()->nullOnDelete(); // constrained() liên kết tới bảng | cascadeOnUpdate() để id trong bảng parts có thay đổi thì id part_id thay đổi theo |  nullOnDelete() khi xoá id trong bảng parts thì id part_id sẽ trở thành null , nếu ko có lệnh thì khi xoá id bảng chính thì bẳng phụ nó sẽ báo lỗi và phải xoá id phụ thì chính mới dc xoá  | nullable() dc phép null
            $table->string('social')->nullable();
            $table->unsignedTinyInteger('result')->default(0)->comment('o: không đạt,1: đạt');
            $table->unsignedTinyInteger('status')->default(0)->comment('o: đang tuyển,1: hoàn thành,2: trễ');
            $table->string('obstacle')->nullable();
            $table->string('solution')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recruitments');
    }
};
