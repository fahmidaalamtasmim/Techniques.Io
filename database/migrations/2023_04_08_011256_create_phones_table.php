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
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('price')->nullable();
            $table->string('details')->nullable();
            $table->string('new_price')->nullable();
            $table->integer('state')->default(0);
            $table->string('short_desp')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('photo')->nullable();
            $table->integer('web_id')->nullable();
            $table->string('product_info')->nullable();
            $table->integer('pp')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phones');
    }
};
