<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('title');
            $table->text('description');
            $table->integer('price');
            $table->text('imageOne');
            $table->text('imageTwo')->nullable();
            $table->text('imageThree')->nullable();
            $table->integer('discount')->default(0);
            $table->string('type')->nullable();
            $table
                ->foreign('category_id')
                ->references('id')
                ->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('products');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
};
