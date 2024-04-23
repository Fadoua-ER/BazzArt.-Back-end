<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    
    public function run(): void
    {
        //
        DB::table('continents')->insert([
            ['continent_name' => 'Africa'],
            ['continent_name' => 'Antarctica'],
            ['continent_name' => 'Asia'],
            ['continent_name' => 'Australia'],
            ['continent_name' => 'Europe'],
            ['continent_name' => 'North America'],
            ['continent_name' => 'South America'],
        ]);
    }
}
