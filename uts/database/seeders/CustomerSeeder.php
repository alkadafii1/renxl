<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'first_name' => 'Rifky',
                'last_name' => 'Hidayat',
                'address' => 'Jl.Batu',
                'phone' => '081234567890',
                'email' => 'rifky@gmail.com',
            ],
            [
                'first_name' => 'Dani',
                'last_name' => 'Dans',
                'address' => 'Jln.ikan',
                'phone' => '082345678901',
                'email' => 'dandandan@gmail.com',
            ],
        ]);
    }
}
