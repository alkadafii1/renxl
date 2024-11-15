<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('rentals')->insert([
            [
                'customer_id' => 1,
                'movie_id' => 1,  
                'rental_date_out' => '2023-01-15', 
                'rental_date_returned' => '2023-01-20',
                'rental_amount_due' => 21.00,
            ],
            [
                'customer_id' => 2, 
                'movie_id' => 2, 
                'rental_date_out' => '2023-02-10',
                'rental_date_returned' => '2023-02-15',
                'rental_amount_due' => 24.00, 
            ],
        ]);
    }
}
