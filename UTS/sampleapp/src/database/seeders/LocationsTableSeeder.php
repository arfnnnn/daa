<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class LocationsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('locations')->insert([
            ['name' => 'Jakarta', 'type' => 'urban'],
            ['name' => 'Bandung', 'type' => 'urban'],
            ['name' => 'Papua', 'type' => 'rural'],
        ]);
    }
}
