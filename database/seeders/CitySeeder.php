<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    
    public function run(): void
    {
        //
        $thecountryid = DB::table('countries')->where('country_name', 'Morocco')->value('country_id');
        $thecities = [
            ['city_name' => 'Casablanca', 'city_region' => 'Casablanca-Settat', 'postal_code' => 20000, 'country' => $thecountryid],
            ['city_name' => 'Fès',  'city_region' =>'Fès-Meknès', 'postal_code' => 30000, 'country' => $thecountryid],
            ['city_name' => 'Marrakech',  'city_region' => 'Marrakech-Safi' ,'postal_code' => 40000, 'country' => $thecountryid],
            ['city_name' => 'Tangier',  'city_region' => 'Tanger-Tétouan-Al Hoceïma', 'postal_code' => 90000, 'country' => $thecountryid],
            ['city_name' => 'Sale',  'city_region' => 'Rabat-Salé-Kénitra', 'postal_code' => 11000, 'country' => $thecountryid],
            ['city_name' => 'Rabat',  'city_region' => 'Rabat-Salé-Kénitra', 'postal_code' => 10000, 'country' => $thecountryid],
            ['city_name' => 'Meknès',  'city_region' =>'Fès-Meknès', 'postal_code' => 50000, 'country' => $thecountryid],
            ['city_name' => 'Oujda-Angad',  'city_region' => 'Oriental', 'postal_code' => 60000, 'country' => $thecountryid],
            ['city_name' => 'Kenitra',  'city_region' => 'Rabat-Salé-Kénitra', 'postal_code' => 14000, 'country' => $thecountryid],
            ['city_name' => 'Agadir',  'city_region' => 'Souss-Massa', 'postal_code' => 80000, 'country' => $thecountryid],
            ['city_name' => 'Tétouan',  'city_region' => 'Tanger-Tétouan-Al Hoceïma', 'postal_code' => 93000, 'country' => $thecountryid],
            ['city_name' => 'Taourirt',  'city_region' => 'Oriental', 'postal_code' => 60800, 'country' => $thecountryid],
            ['city_name' => 'Temara',  'city_region' => 'Rabat-Salé-Kénitra', 'postal_code' => 12000, 'country' => $thecountryid],
            ['city_name' => 'Safi',  'city_region' => 'Marrakech-Safi' ,'postal_code' => 46000, 'country' => $thecountryid],
            ['city_name' => 'Khénifra',  'city_region' => 'Béni Mellal-Khénifra', 'postal_code' => 54000, 'country' => $thecountryid],
            ['city_name' => 'El Jadida', 'city_region' => 'Casablanca-Settat', 'postal_code' => 24000, 'country' => $thecountryid],
            ['city_name' => 'Laâyoune',  'city_region' => 'Laâyoune-Sakia El Hamra', 'postal_code' => 70000, 'country' => $thecountryid],
            ['city_name' => 'Mohammedia', 'city_region' => 'Casablanca-Settat', 'postal_code' => 20650, 'country' => $thecountryid],
            ['city_name' => 'Kouribga',  'city_region' => 'Béni Mellal-Khénifra', 'postal_code' => 25000, 'country' => $thecountryid],
            ['city_name' => 'Béni Mellal',  'city_region' => 'Béni Mellal-Khénifra', 'postal_code' => 23000, 'country' => $thecountryid],
            ['city_name' => 'Ait Melloul',  'city_region' => 'Souss-Massa', 'postal_code' => 80000, 'country' => $thecountryid],
            ['city_name' => 'Nador',  'city_region' => 'Oriental', 'postal_code' => 62000, 'country' => $thecountryid],
            ['city_name' => 'Taza',  'city_region' =>'Fès-Meknès', 'postal_code' => 35000, 'country' => $thecountryid],
            ['city_name' => 'Settat', 'city_region' => 'Casablanca-Settat', 'postal_code' => 26000, 'country' => $thecountryid],
            ['city_name' => 'Berrechid', 'city_region' => 'Casablanca-Settat', 'postal_code' => 26100, 'country' => $thecountryid],
            ['city_name' => 'Al Khemissat',  'city_region' => 'Rabat-Salé-Kénitra', 'postal_code' => 15000, 'country' => $thecountryid],
            ['city_name' => 'Inezgane',  'city_region' => 'Souss-Massa', 'postal_code' => 80000, 'country' => $thecountryid],
            ['city_name' => 'Ksar El Kebir',  'city_region' => 'Tanger-Tétouan-Al Hoceïma', 'postal_code' => 92150, 'country' => $thecountryid],
            ['city_name' => 'My Drarga',  'city_region' => 'Souss-Massa', 'postal_code' => 80100, 'country' => $thecountryid],
            ['city_name' => 'Larache',  'city_region' => 'Tanger-Tétouan-Al Hoceïma', 'postal_code' => 92000, 'country' => $thecountryid],
            ['city_name' => 'Guelmim', 'city_region' => 'Guelmim-Oued Noun', 'postal_code' => 81000, 'country' => $thecountryid],
            ['city_name' => 'Berkane',  'city_region' => 'Oriental', 'postal_code' => 66000, 'country' => $thecountryid],
            ['city_name' => 'Ad Dakhla',  'city_region' =>'Dakhla-Oued Ed-Dahab', 'postal_code' => 73000, 'country' => $thecountryid],
            ['city_name' => 'Bouskoura', 'city_region' => 'Casablanca-Settat', 'postal_code' => 27100, 'country' => $thecountryid],
            ['city_name' => 'Al Fqih Ben Çalah',  'city_region' => 'Béni Mellal-Khénifra', 'postal_code' => 23000, 'country' => $thecountryid],
            ['city_name' => 'Oued Zem',  'city_region' => 'Béni Mellal-Khénifra', 'postal_code' => 25210, 'country' => $thecountryid],
            ['city_name' => 'Sidi Slimane',  'city_region' => 'Rabat-Salé-Kénitra', 'postal_code' => 28000, 'country' => $thecountryid],
            ['city_name' => 'Errachidia',  'city_region' => 'Drâa-Tafilalet', 'postal_code' => 52000, 'country' => $thecountryid],
            ['city_name' => 'Guercif',  'city_region' => 'Oriental', 'postal_code' => 63000, 'country' => $thecountryid],
            ['city_name' => 'Oulad Teïma',  'city_region' => 'Souss-Massa', 'postal_code' => 83004, 'country' => $thecountryid],
            ['city_name' => 'Ben Guerir',  'city_region' => 'Marrakech-Safi' ,'postal_code' => 43150, 'country' => $thecountryid],
            ['city_name' => 'Sefrou',  'city_region' =>'Fès-Meknès', 'postal_code' => 31000, 'country' => $thecountryid],
            ['city_name' => 'Fnideq',  'city_region' => 'Tanger-Tétouan-Al Hoceïma', 'postal_code' => 93100, 'country' => $thecountryid],
            ['city_name' => 'Sidi Qacem',  'city_region' => 'Rabat-Salé-Kénitra', 'postal_code' => 28000, 'country' => $thecountryid],
            ['city_name' => 'Tiznit',  'city_region' => 'Souss-Massa', 'postal_code' => 85000, 'country' => $thecountryid],
            ['city_name' => 'Moulay Abdallah', 'city_region' => 'Casablanca-Settat', 'postal_code' => 24003, 'country' => $thecountryid],
            ['city_name' => 'Youssoufia',  'city_region' => 'Marrakech-Safi' ,'postal_code' => 46300, 'country' => $thecountryid],
            ['city_name' => 'Martil',  'city_region' => 'Tanger-Tétouan-Al Hoceïma', 'postal_code' => 93150, 'country' => $thecountryid],
            ['city_name' => 'Aïn Harrouda', 'city_region' => 'Casablanca-Settat', 'postal_code' => 28630, 'country' => $thecountryid],
            ['city_name' => 'Souk Sebt Oulad Nemma',  'city_region' => 'Béni Mellal-Khénifra', 'postal_code' => 23550, 'country' => $thecountryid],
            ['city_name' => 'Skhirate',  'city_region' => 'Rabat-Salé-Kénitra', 'postal_code' => 12050, 'country' => $thecountryid],
            ['city_name' => 'Ouezzane',  'city_region' => 'Tanger-Tétouan-Al Hoceïma', 'postal_code' => 71250, 'country' => $thecountryid],
            ['city_name' => 'Sidi Yahya Zaer',  'city_region' => 'Rabat-Salé-Kénitra', 'postal_code' => 12040, 'country' => $thecountryid],
            ['city_name' => 'Al Hoceïma',  'city_region' => 'Tanger-Tétouan-Al Hoceïma', 'postal_code' => 32000, 'country' => $thecountryid],
            ['city_name' => 'M`diq',  'city_region' => 'Tanger-Tétouan-Al Hoceïma', 'postal_code' => 93200, 'country' => $thecountryid],
            ['city_name' => 'Midalt',  'city_region' => 'Drâa-Tafilalet', 'postal_code' => 54350, 'country' => $thecountryid],
            ['city_name' => 'Azrou',  'city_region' =>'Fès-Meknès', 'postal_code' => 53100, 'country' => $thecountryid],
            ['city_name' => 'El Kelaa des Srarhna',  'city_region' => 'Marrakech-Safi' ,'postal_code' => 42152, 'country' => $thecountryid],
            ['city_name' => 'Ain El Aouda',  'city_region' => 'Rabat-Salé-Kénitra', 'postal_code' => 15180, 'country' => $thecountryid],
            ['city_name' => 'Beni Yakhlef', 'city_region' => 'Casablanca-Settat', 'postal_code' => 26600, 'country' => $thecountryid],
            ['city_name' => 'Deroua', 'city_region' => 'Casablanca-Settat' ,'postal_code' => 43275, 'country' => $thecountryid],
            ['city_name' => 'Al Aaroui',  'city_region' => 'Oriental', 'postal_code' => 62550, 'country' => $thecountryid],
            ['city_name' => 'Qasbat Tadla',  'city_region' => 'Béni Mellal-Khénifra', 'postal_code' => 25800, 'country' => $thecountryid],
            ['city_name' => 'Bejaad',  'city_region' => 'Béni Mellal-Khénifra', 'postal_code' => 25060, 'country' => $thecountryid],
            ['city_name' => 'Jerada',  'city_region' => 'Oriental', 'postal_code' => 64100, 'country' => $thecountryid],
            ['city_name' => 'Mrirt',  'city_region' => 'Béni Mellal-Khénifra', 'postal_code' => 54450, 'country' => $thecountryid],
            ['city_name' => 'El Aïoun',  'city_region' => 'Oriental', 'postal_code' => 65450, 'country' => $thecountryid],
            ['city_name' => 'Azemmour', 'city_region' => 'Casablanca-Settat', 'postal_code' => 24100, 'country' => $thecountryid],
            ['city_name' => 'Temsia',  'city_region' => 'Souss-Massa', 'postal_code' => 80000, 'country' => $thecountryid],
            ['city_name' => 'Zagora',  'city_region' => 'Drâa-Tafilalet' ,'postal_code' => 47900, 'country' => $thecountryid],
            ['city_name' => 'Ait Ourir',  'city_region' => 'Marrakech-Safi' ,'postal_code' => 42000, 'country' => $thecountryid],
            ['city_name' => 'Aziylal',  'city_region' => 'Béni Mellal-Khénifra', 'postal_code' => 22000, 'country' => $thecountryid],
            ['city_name' => 'Sidi Yahia El Gharb',  'city_region' => 'Rabat-Salé-Kénitra', 'postal_code' => 14250, 'country' => $thecountryid],
            ['city_name' => 'Biougra',  'city_region' => 'Souss-Massa', 'postal_code' => 87200, 'country' => $thecountryid],
            ['city_name' => 'Zaïo',  'city_region' => 'Oriental', 'postal_code' => 62000, 'country' => $thecountryid],
            ['city_name' => 'Aguelmous',  'city_region' => 'Béni Mellal-Khénifra', 'postal_code' => 25220, 'country' => $thecountryid],
            ['city_name' => 'El Hajeb',  'city_region' =>'Fès-Meknès', 'postal_code' => 30000, 'country' => $thecountryid],
            ['city_name' => 'Zeghanghane',  'city_region' => 'Oriental', 'postal_code' => 62000, 'country' => $thecountryid],
            ['city_name' => 'Imzouren',  'city_region' => 'Tanger-Tétouan-Al Hoceïma', 'postal_code' => 32250, 'country' => $thecountryid],
            ['city_name' => 'Tit Mellil', 'city_region' => 'Casablanca-Settat', 'postal_code' => 26100, 'country' => $thecountryid],
            ['city_name' => 'Mechraa Bel Ksiri',  'city_region' => 'Rabat-Salé-Kénitra', 'postal_code' => 28210, 'country' => $thecountryid],
            ['city_name' => 'El Attaouia',  'city_region' => 'Marrakech-Safi' ,'postal_code' => 43100, 'country' => $thecountryid],
            ['city_name' => 'Demnat',  'city_region' => 'Béni Mellal-Khénifra', 'postal_code' => 21000, 'country' => $thecountryid],
            ['city_name' => 'Arfoud',  'city_region' => 'Drâa-Tafilalet', 'postal_code' => 52200, 'country' => $thecountryid],
            ['city_name' => 'Tameslouht',  'city_region' => 'Marrakech-Safi' ,'postal_code' => 42312, 'country' => $thecountryid],
            ['city_name' => 'Bouarfa',  'city_region' => 'Oriental', 'postal_code' => 61200, 'country' => $thecountryid],
            ['city_name' => 'Sidi Smail', 'city_region' => 'Casablanca-Settat', 'postal_code' => 24402, 'country' => $thecountryid],
            ['city_name' => 'Souk et Tnine Jorf el Mellah',  'city_region' => 'Rabat-Salé-Kénitra', 'postal_code' => 91122, 'country' => $thecountryid],
            ['city_name' => 'Mehdia',  'city_region' => 'Rabat-Salé-Kénitra', 'postal_code' => 14110, 'country' => $thecountryid],
            ['city_name' => 'Aïn Taoujdat',  'city_region' =>'Fès-Meknès', 'postal_code' => 31050, 'country' => $thecountryid],
            ['city_name' => 'Chichaoua',  'city_region' => 'Marrakech-Safi' ,'postal_code' => 41100, 'country' => $thecountryid],
            ['city_name' => 'Tahla',  'city_region' =>'Fès-Meknès', 'postal_code' => 34000, 'country' => $thecountryid],
            ['city_name' => 'Oulad Yaïch',  'city_region' => 'Béni Mellal-Khénifra', 'postal_code' => 23850, 'country' => $thecountryid],
            ['city_name' => 'Moulay Bousselham',  'city_region' => 'Rabat-Salé-Kénitra', 'postal_code' => 26800, 'country' => $thecountryid],
            ['city_name' => 'Iheddadene',  'city_region' => 'Oriental', 'postal_code' => 62673, 'country' => $thecountryid],
            ['city_name' => 'Missour',  'city_region' =>'Fès-Meknès', 'postal_code' => 53000, 'country' => $thecountryid],
            ['city_name' => 'Zawyat ech Cheïkh',  'city_region' => 'Béni Mellal-Khénifra', 'postal_code' => 23000, 'country' => $thecountryid],
            ['city_name' => 'Bouknadel',  'city_region' => 'Rabat-Salé-Kénitra', 'postal_code' => 11030, 'country' => $thecountryid],
            ['city_name' => 'Oulad Tayeb',  'city_region' =>'Fès-Meknès', 'postal_code' => 30023, 'country' => $thecountryid],
            ['city_name' => 'Oulad Berhil',  'city_region' => 'Souss-Massa', 'postal_code' => 83300, 'country' => $thecountryid],
            ['city_name' => 'Bir Jdid', 'city_region' => 'Casablanca-Settat', 'postal_code' => 26150, 'country' => $thecountryid],
            ['city_name' => 'Tifariti',  'city_region' => 'Laâyoune-Sakia El Hamra', 'postal_code' => 25000, 'country' => $thecountryid],
         ];         
        DB::table('cities')->insert($thecities);

    }
}
