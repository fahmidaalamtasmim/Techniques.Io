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
        Schema::create('camera_singles', function (Blueprint $table) {
            $table->id();
            $table->string('specification')->nullable();
            $table->string('price')->nullable();
            $table->string('description')->nullable();
            $table->string('new_price')->nullable();
            $table->string('old_price')->nullable();
            $table->string('short_desp')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('photo')->nullable();
            $table->integer('product_id')->nullable();
            $table->integer('web_id')->nullable();
            $table->string('product_info')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camera_singles');
    }
};
