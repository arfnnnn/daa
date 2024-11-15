<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TeachersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('teachers')->insert([
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'phone' => '08123456789',
                'qualification_id' => 1,
                'location' => 'Jakarta', // Nama lokasi langsung
                'experience_years' => 10,
                'salary' => 7500000.00,
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'phone' => '08123456790',
                'qualification_id' => 2,
                'location' => 'Bandung', // Nama lokasi langsung
                'experience_years' => 8,
                'salary' => 6800000.00,
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ]);
    }
}
