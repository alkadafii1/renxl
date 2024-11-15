<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('accounts')->insert([
            [
                'account_name' => 'isma', 
                'account_details' => 'Akun untuk rental movie', 
                'customer_id' => 1, 
            ],
            [
                'account_name' => 'Fariz',  
                'account_details' => 'Akun untuk rental movie', 
                'customer_id' => 2, 
            ],
        ]);
    }
}
