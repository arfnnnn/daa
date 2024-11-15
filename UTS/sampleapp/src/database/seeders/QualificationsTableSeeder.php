<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class QualificationsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('qualifications')->insert([
            ['name' => 'Bachelor'],
            ['name' => 'Master'],
            ['name' => 'PhD'],
        ]);
    }
}
