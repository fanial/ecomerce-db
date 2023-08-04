<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'customer_name' => 'Asep',
                'email' => 'asep@gmail.com',
                'date_registered' => '04/08/2023'
            ],
            [
                'customer_name' => 'Dadang',
                'email' => 'dadang@gmail.com',
                'date_registered' => '04/08/2022'
            ],
            [
                'customer_name' => 'Denis',
                'email' => 'denis@gmail.com',
                'date_registered' => '23/03/2023'
            ],
            [
                'customer_name' => 'Martin',
                'email' => 'martin@gmail.com',
                'date_registered' => '14/09/2021'
            ],
            [
                'customer_name' => 'Samsul',
                'email' => 'samsul@gmail.com',
                'date_registered' => '15/01/2023'
            ],
            [
                'customer_name' => 'Ucok',
                'email' => 'ucok@gmail.com',
                'date_registered' => '05/12/2022'
            ],
            [
                'customer_name' => 'Siti',
                'email' => 'siti@gmail.com',
                'date_registered' => '09/02/2023'
            ],
            [
                'customer_name' => 'David',
                'email' => 'david@gmail.com',
                'date_registered' => '27/03/2021'
            ],
            [
                'customer_name' => 'Yunus',
                'email' => 'yunus@gmail.com',
                'date_registered' => '30/03/2023'
            ],
            [
                'customer_name' => 'Raihan',
                'email' => 'raihan@gmail.com',
                'date_registered' => '18/05/2022'
            ],
        ]);
    }
}
