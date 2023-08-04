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
        Schema::create('customers', function (Blueprint $table) {
            // customer_id (int), customer_name (varchar), email (varchar), date_registered (date)
            $table->increments('customer_id')->autoIncrement();
            $table->string('customer_name');
            $table->string('email')->unique();
            $table->date('date_registered');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
