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
        Schema::create('order_items', function (Blueprint $table) {
            // order_item_id (int), order_id (int), product_id (int), quantity (int)
            $table->increments('order_item_id')->autoIncrement();
            $table->foreignId('order_id')->references('order_id')->on('orders');
            $table->foreignId('product_id')->references('product_id')->on('products');
            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
