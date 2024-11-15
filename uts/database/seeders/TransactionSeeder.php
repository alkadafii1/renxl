<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('transactions')->insert([
            [
                'transaction_date' => '2023-01-18',
                'transaction_amount' => 21.00,
                'transaction_comment' => 'Pembayaran rental movie',  
                'account_id' => 1,
                'item_rental_id' => 1,
            ],
            [
                'transaction_date' => '2023-02-12', 
                'transaction_amount' => 24.00,  
                'transaction_comment' => 'Pembayaran rental movie', 
                'account_id' => 2,
                'item_rental_id' => 2,  
            ],
        ]);
    }
}
