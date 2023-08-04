<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_items')->insert([
            [
                'order_id' => 1,
                'product_id' => 1,
                'quantity' => 2
            ],
            [
                'order_id' => 2,
                'product_id' => 2,
                'quantity' => 3
            ],
            [
                'order_id' => 3,
                'product_id' => 3,
                'quantity' => 2
            ],
            [
                'order_id' => 4,
                'product_id' => 4,
                'quantity' => 5
            ],

            [
                'order_id' => 5,
                'product_id' => 1,
                'quantity' => 3
            ],
            [
                'order_id' => 6,
                'product_id' => 2,
                'quantity' => 2
            ],
            [
                'order_id' => 7,
                'product_id' => 3,
                'quantity' => 10
            ],
            [
                'order_id' => 8,
                'product_id' => 4,
                'quantity' => 3
            ],


            [
                'order_id' => 9,
                'product_id' => 1,
                'quantity' => 4
            ],
            [
                'order_id' => 10,
                'product_id' => 2,
                'quantity' => 10
            ],
        ]);
    }
}
