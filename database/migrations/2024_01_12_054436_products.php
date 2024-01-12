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
        //
        Schema::create('res_products', function (Blueprint $table) {
            $table->id();
            $table->integer('rescat_id')->nullable();;
            $table->string('name')->nullable();;
            $table->string('description')->nullable();;
            $table->integer('unit_price')->nullable();;
            $table->integer('promotion_price')->nullable();;
            $table->text('image')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('res_products');
    }
};
