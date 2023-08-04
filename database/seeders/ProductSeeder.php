<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'product_name' => 'Water',
                'price' => 5000
            ],
            [
                'product_name' => 'Ice Tea',
                'price' => 7500
            ],
            [
                'product_name' => 'Nodlee',
                'price' => 3500
            ],
            [
                'product_name' => 'Chicken',
                'price' => 10000
            ],
        ]);
    }
}
