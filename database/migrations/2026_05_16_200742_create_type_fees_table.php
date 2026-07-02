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
        Schema::create('type_fees', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(); // string = varchar 255
            $table->string('code', 100)->nullable(); // string = varchar 255
            $table->unsignedTinyInteger('type')->default(0)->comment('0: chi, 1: thu'); // unsignedTinyInteger() giá trị 0 1  | default(0) mặc định = 0
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_fees');
    }
};
