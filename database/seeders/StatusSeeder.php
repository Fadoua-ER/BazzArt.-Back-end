<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    
    public function run(): void
    {
        //
        $statuses = [
            [
                'status_name' => 'Available',
                'status_description' => 'This artwork is currently available for purchase. Users can view details and make a purchase transaction.'
            ],
            [
                'status_name' => 'Sold',
                'status_description' => 'This artwork has been sold and is no longer available for purchase. Users can view it but cannot make a purchase.'
            ],
            [
                'status_name' => 'Reserved',
                'status_description' => 'This artwork is currently reserved for a potential buyer. It may become available again if the reservation is canceled.'
            ],
            [
                'status_name' => 'On Hold',
                'status_description' => 'This artwork is temporarily on hold and not available for purchase at the moment. It may become available again later.'
            ],
            [
                'status_name' => 'Coming Soon',
                'status_description' => 'This artwork will be available for purchase soon. Users can view details and express interest, but cannot make a purchase yet.'
            ],
            [
                'status_name' => 'Under Review',
                'status_description' => 'This artwork is currently under review by the marketplace administrators. It will be available for purchase once approved.'
            ],
            [
                'status_name' => 'Featured',
                'status_description' => 'This artwork is featured on the marketplace homepage or in a special section, attracting more visibility and attention.'
            ],
            [
                'status_name' => 'Out of Stock',
                'status_description' => 'This artwork is currently out of stock and not available for purchase. Users can still view it for reference.'
            ],
            [
                'status_name' => 'Limited Edition',
                'status_description' => 'This artwork is part of a limited edition collection, with only a certain number of copies available for purchase.'
            ]
        ];

        DB::table('statuses')->insert($statuses);
    }
}
