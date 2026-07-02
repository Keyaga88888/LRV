<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * name , password , rememberToken , email_verified_at
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique(); // unique() ko dc trùng lập
            $table->string('password');
            $table->rememberToken()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('thumbnail')->nullable();
            $table->date('birthday')->nullable();
            $table->unsignedTinyInteger('sex')->comment('o: nam,1: nữ'); // 0 1 bỏ )->default(0)
            $table->foreignId('part_id')->nullable()->constrained('parts')->cascadeOnUpdate()->nullOnDelete(); // constrained() liên kết tới bảng | cascadeOnUpdate() để id trong bảng parts có thay đổi thì id part_id thay đổi theo |  nullOnDelete() khi xoá id trong bảng parts thì id part_id sẽ trở thành null , nếu ko có lệnh thì khi xoá id bảng chính thì bẳng phụ nó sẽ báo lỗi và phải xoá id phụ thì chính mới dc xoá  | nullable() dc phép null
            $table->foreignId('position_id')->nullable()->constrained('positions')->cascadeOnUpdate()->nullOnDelete(); // constrained() liên kết tới bảng | cascadeOnUpdate() để id trong bảng parts có thay đổi thì id part_id thay đổi theo |  nullOnDelete() khi xoá id trong bảng parts thì id part_id sẽ trở thành null , nếu ko có lệnh thì khi xoá id bảng chính thì bẳng phụ nó sẽ báo lỗi và phải xoá id phụ thì chính mới dc xoá  | nullable() dc phép null
            $table->unsignedTinyInteger('type_work')->comment('o: fulltime,1: parttime'); // 0 1 bỏ )->default(0)
            $table->foreignId('team_id')->nullable()->constrained('teams')->cascadeOnUpdate()->nullOnDelete(); // constrained() liên kết tới bảng | cascadeOnUpdate() để id trong bảng parts có thay đổi thì id part_id thay đổi theo |  nullOnDelete() khi xoá id trong bảng parts thì id part_id sẽ trở thành null , nếu ko có lệnh thì khi xoá id bảng chính thì bẳng phụ nó sẽ báo lỗi và phải xoá id phụ thì chính mới dc xoá  | nullable() dc phép null
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->unsignedTinyInteger('status')->comment('o: đang làm,1: nghĩ việc'); // 0 1 bỏ )->default(0)
            $table->dateTime('start_day')->nullable();
            $table->dateTime('end_day')->nullable();
            $table->foreignId('type_account_id')->nullable()->constrained('type_accounts')->cascadeOnUpdate()->nullOnDelete(); // constrained() liên kết tới bảng | cascadeOnUpdate() để id trong bảng parts có thay đổi thì id part_id thay đổi theo |  nullOnDelete() khi xoá id trong bảng parts thì id part_id sẽ trở thành null , nếu ko có lệnh thì khi xoá id bảng chính thì bẳng phụ nó sẽ báo lỗi và phải xoá id phụ thì chính mới dc xoá  | nullable() dc phép null
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
