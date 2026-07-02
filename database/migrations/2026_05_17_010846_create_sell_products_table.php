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
        Schema::create('sell_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->nullable()->constrained('products')->cascadeOnUpdate()->nullOnDelete(); // constrained() liên kết tới bảng | cascadeOnUpdate() để id trong bảng parts có thay đổi thì id part_id thay đổi theo |  nullOnDelete() khi xoá id trong bảng parts thì id part_id sẽ trở thành null , nếu ko có lệnh thì khi xoá id bảng chính thì bẳng phụ nó sẽ báo lỗi và phải xoá id phụ thì chính mới dc xoá  | nullable() dc phép null
            $table->foreignId('sell_id')->nullable()->constrained('sells')->cascadeOnUpdate()->nullOnDelete(); // constrained() liên kết tới bảng | cascadeOnUpdate() để id trong bảng parts có thay đổi thì id part_id thay đổi theo |  nullOnDelete() khi xoá id trong bảng parts thì id part_id sẽ trở thành null , nếu ko có lệnh thì khi xoá id bảng chính thì bẳng phụ nó sẽ báo lỗi và phải xoá id phụ thì chính mới dc xoá  | nullable() dc phép null
            $table->date('sell_day')->nullable();
            $table->string('fullname_customer')->nullable();
            $table->integer('number_sell')->nullable();
            $table->integer('price_sell')->nullable();
            $table->integer('revenue');
            $table->foreignId('atm_id')->nullable()->constrained('atms')->cascadeOnUpdate()->nullOnDelete(); // constrained() liên kết tới bảng | cascadeOnUpdate() để id trong bảng parts có thay đổi thì id part_id thay đổi theo |  nullOnDelete() khi xoá id trong bảng parts thì id part_id sẽ trở thành null , nếu ko có lệnh thì khi xoá id bảng chính thì bẳng phụ nó sẽ báo lỗi và phải xoá id phụ thì chính mới dc xoá  | nullable() dc phép null
            $table->integer('number_product')->nullable();

            $table->unsignedTinyInteger('bagging')->default(0)->comment('0: chưa đóng bao,1: đã đóng bao');
            $table->integer('number_bagging')->nullable();
            $table->string('transport')->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sell_products');
    }
};
