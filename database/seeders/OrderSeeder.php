<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'customer_id' => 1,
                'order_date' => '29/07/2023',
                'total_amount' => 10000, // Water x2
            ],
            [
                'customer_id' => 2,
                'order_date' => '29/06/2023',
                'total_amount' => 22500, // Ice Tea x3
            ],
            [
                'customer_id' => 4,
                'order_date' => '15/07/2023',
                'total_amount' => 7000, // Nodlee x2
            ],
            [
                'customer_id' => 7,
                'order_date' => '26/07/2023',
                'total_amount' => 50000, // Chicken x5
            ],
            [
                'customer_id' => 8,
                'order_date' => '20/07/2023',
                'total_amount' => 15000, // Water x3
            ],
            [
                'customer_id' => 9,
                'order_date' => '20/07/2023',
                'total_amount' => 15000, // Ice Tea x2
            ],
            [
                'customer_id' => 2,
                'order_date' => '29/06/2023',
                'total_amount' => 35000, // Nodle x10
            ],
            [
                'customer_id' => 2,
                'order_date' => '29/06/2023',
                'total_amount' => 30000, // Chicken x3
            ],
            [
                'customer_id' => 5,
                'order_date' => '29/05/2023',
                'total_amount' => 20000, // Water x4
            ],
            [
                'customer_id' => 6,
                'order_date' => '15/06/2023',
                'total_amount' => 75000, // Ice Tea x10
            ],
        ]);
    }
}
