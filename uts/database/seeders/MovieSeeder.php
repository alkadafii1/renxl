<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            [
                'release_year' => 2023,
                'movie_title' => 'The Great Adventure',
                'description' => 'Perjalanan menjelajahi dunia',
                'number_in_stock' => '50',
                'status' => 'rental',
                'rental_daily_rate' => 21.00,
            ],
            [
                'release_year' => 2022,
                'movie_title' => 'Action Heroes',
                'description' => 'Misi Penyelamatan',
                'number_in_stock' => '30',
                'status' => 'sale',
                'rental_daily_rate' => 24.00,
            ],
        ]);
    }
}
