<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    
    public function run(): void
    {
        //
        $thecontinentid = DB::table('continents')->where('continent_name', 'Africa')->value('continent_id');
        $thecountries = [
            ['country_code' => 'DZ', 'country_name' => 'Algeria', 'phone_code' => '213', 'continent' => $thecontinentid],
            ['country_code' => 'AO', 'country_name' => 'Angola', 'phone_code' => '244', 'continent' => $thecontinentid],
            ['country_code' => 'BJ', 'country_name' => 'Benin', 'phone_code' => '229', 'continent' => $thecontinentid],
            ['country_code' => 'BW', 'country_name' => 'Botswana', 'phone_code' => '267', 'continent' => $thecontinentid],
            ['country_code' => 'BF', 'country_name' => 'Burkina Faso', 'phone_code' => '226', 'continent' => $thecontinentid],
            ['country_code' => 'BI', 'country_name' => 'Burundi', 'phone_code' => '257', 'continent' => $thecontinentid],
            ['country_code' => 'CV', 'country_name' => 'Cabo Verde', 'phone_code' => '238', 'continent' => $thecontinentid],
            ['country_code' => 'CM', 'country_name' => 'Cameroon', 'phone_code' => '237', 'continent' => $thecontinentid],
            ['country_code' => 'CF', 'country_name' => 'Central African Republic', 'phone_code' => '236', 'continent' => $thecontinentid],
            ['country_code' => 'TD', 'country_name' => 'Chad', 'phone_code' => '235', 'continent' => $thecontinentid],
            ['country_code' => 'KM', 'country_name' => 'Comoros', 'phone_code' => '269', 'continent' => $thecontinentid],
            ['country_code' => 'CG', 'country_name' => 'Congo (Brazzaville)', 'phone_code' => '242', 'continent' => $thecontinentid],
            ['country_code' => 'CD', 'country_name' => 'Congo (Kinshasa)', 'phone_code' => '243', 'continent' => $thecontinentid],
            ['country_code' => 'CI', 'country_name' => 'Côte d`Ivoire', 'phone_code' => '225', 'continent' => $thecontinentid],
            ['country_code' => 'DJ', 'country_name' => 'Djibouti', 'phone_code' => '253', 'continent' => $thecontinentid],
            ['country_code' => 'EG', 'country_name' => 'Egypt', 'phone_code' => '20', 'continent' => $thecontinentid],
            ['country_code' => 'GQ', 'country_name' => 'Equatorial Guinea', 'phone_code' => '240', 'continent' => $thecontinentid],
            ['country_code' => 'ER', 'country_name' => 'Eritrea', 'phone_code' => '291', 'continent' => $thecontinentid],
            ['country_code' => 'SZ', 'country_name' => 'Eswatini', 'phone_code' => '268', 'continent' => $thecontinentid],
            ['country_code' => 'ET', 'country_name' => 'Ethiopia', 'phone_code' => '251', 'continent' => $thecontinentid],
            ['country_code' => 'GA', 'country_name' => 'Gabon', 'phone_code' => '241', 'continent' => $thecontinentid],
            ['country_code' => 'GM', 'country_name' => 'Gambia', 'phone_code' => '220', 'continent' => $thecontinentid],
            ['country_code' => 'GH', 'country_name' => 'Ghana', 'phone_code' => '233', 'continent' => $thecontinentid],
            ['country_code' => 'GN', 'country_name' => 'Guinea', 'phone_code' => '224', 'continent' => $thecontinentid],
            ['country_code' => 'GW', 'country_name' => 'Guinea-Bissau', 'phone_code' => '245', 'continent' => $thecontinentid],
            ['country_code' => 'KE', 'country_name' => 'Kenya', 'phone_code' => '254', 'continent' => $thecontinentid],
            ['country_code' => 'LS', 'country_name' => 'Lesotho', 'phone_code' => '266', 'continent' => $thecontinentid],
            ['country_code' => 'LR', 'country_name' => 'Liberia', 'phone_code' => '231', 'continent' => $thecontinentid],
            ['country_code' => 'LY', 'country_name' => 'Libya', 'phone_code' => '218', 'continent' => $thecontinentid],
            ['country_code' => 'MG', 'country_name' => 'Madagascar', 'phone_code' => '261', 'continent' => $thecontinentid],
            ['country_code' => 'MW', 'country_name' => 'Malawi', 'phone_code' => '265', 'continent' => $thecontinentid],
            ['country_code' => 'ML', 'country_name' => 'Mali', 'phone_code' => '223', 'continent' => $thecontinentid],
            ['country_code' => 'MR', 'country_name' => 'Mauritania', 'phone_code' => '222', 'continent' => $thecontinentid],
            ['country_code' => 'MU', 'country_name' => 'Mauritius', 'phone_code' => '230', 'continent' => $thecontinentid],
            ['country_code' => 'MA', 'country_name' => 'Morocco', 'phone_code' => '212', 'continent' => $thecontinentid],
            ['country_code' => 'MZ', 'country_name' => 'Mozambique', 'phone_code' => '258', 'continent' => $thecontinentid],
            ['country_code' => 'NA', 'country_name' => 'Namibia', 'phone_code' => '264', 'continent' => $thecontinentid],
            ['country_code' => 'NE', 'country_name' => 'Niger', 'phone_code' => '227', 'continent' => $thecontinentid],
            ['country_code' => 'NG', 'country_name' => 'Nigeria', 'phone_code' => '234', 'continent' => $thecontinentid],
            ['country_code' => 'RW', 'country_name' => 'Rwanda', 'phone_code' => '250', 'continent' => $thecontinentid],
            ['country_code' => 'ST', 'country_name' => 'Sao Tome and Principe', 'phone_code' => '239', 'continent' => $thecontinentid],
            ['country_code' => 'SN', 'country_name' => 'Senegal', 'phone_code' => '221', 'continent' => $thecontinentid],
            ['country_code' => 'SC', 'country_name' => 'Seychelles', 'phone_code' => '248', 'continent' => $thecontinentid],
            ['country_code' => 'SL', 'country_name' => 'Sierra Leone', 'phone_code' => '232', 'continent' => $thecontinentid],
            ['country_code' => 'SO', 'country_name' => 'Somalia', 'phone_code' => '252', 'continent' => $thecontinentid],
            ['country_code' => 'ZA', 'country_name' => 'South Africa', 'phone_code' => '27', 'continent' => $thecontinentid],
            ['country_code' => 'SS', 'country_name' => 'South Sudan', 'phone_code' => '211', 'continent' => $thecontinentid],
            ['country_code' => 'SD', 'country_name' => 'Sudan', 'phone_code' => '249', 'continent' => $thecontinentid],
            ['country_code' => 'TZ', 'country_name' => 'Tanzania', 'phone_code' => '255', 'continent' => $thecontinentid],
            ['country_code' => 'TG', 'country_name' => 'Togo', 'phone_code' => '228', 'continent' => $thecontinentid],
            ['country_code' => 'TN', 'country_name' => 'Tunisia', 'phone_code' => '216', 'continent' => $thecontinentid],
            ['country_code' => 'UG', 'country_name' => 'Uganda', 'phone_code' => '256', 'continent' => $thecontinentid],
            ['country_code' => 'ZM', 'country_name' => 'Zambia', 'phone_code' => '260', 'continent' => $thecontinentid],
            ['country_code' => 'ZW', 'country_name' => 'Zimbabwe', 'phone_code' => '263', 'continent' => $thecontinentid],
        ];
        
        DB::table('countries')->insert($thecountries);
    }
}
