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
        Schema::create('orders', function (Blueprint $table) {
            //  order_id (int), customer_id (int), order_date (date), total_amount (decimal) 
            $table->increments('order_id')->autoIncrement();
            $table->foreignId('customer_id')->references('customer_id')->on('customers');
            $table->date('order_date');
            $table->decimal('total_amount');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
