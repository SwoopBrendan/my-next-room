<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->delete();

        DB::table('locations')->insert(array(

            // City Bowl

            0 =>
                array(
                    'id' => 1,
                    'name' => 'Bo-Kaap',
                    'slug' => 'bo-kaap',
                    'postal_code' => '8001',
                    'greater_area_id' => '1'
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'Devil\'s Peak Estate',
                    'slug' => 'devils-peak-estate',
                    'postal_code' => '8001',
                    'greater_area_id' => '1'
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'De Waterkant',
                    'slug' => 'de-waterkant',
                    'postal_code' => '8001',
                    'greater_area_id' => '1'
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'Foreshore',
                    'slug' => 'foreshore',
                    'postal_code' => '8001',
                    'greater_area_id' => '1'
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => 'Gardens',
                    'slug' => 'gardens',
                    'postal_code' => '8001',
                    'greater_area_id' => '1'
                ),
            5 =>
                array(
                    'id' => 6,
                    'name' => 'Higgovale',
                    'slug' => 'higgovale',
                    'postal_code' => '8001',
                    'greater_area_id' => '1'
                ),
            6 =>
                array(
                    'id' => 7,
                    'name' => 'Lower Vrede (District Six)',
                    'slug' => 'lower-vrede',
                    'postal_code' => '8001',
                    'greater_area_id' => '1'
                ),
            7 =>
                array(
                    'id' => 8,
                    'name' => 'Oranjezicht',
                    'slug' => 'oranjezicht',
                    'postal_code' => '8001',
                    'greater_area_id' => '1'
                ),
            8 =>
                array(
                    'id' => 9,
                    'name' => 'Salt River',
                    'slug' => 'salt-river',
                    'postal_code' => '7925',
                    'greater_area_id' => '1'
                ),
            9 =>
                array(
                    'id' => 10,
                    'name' => 'Schotse Kloof (Malay Quarter)',
                    'slug' => 'schotse-kloof',
                    'postal_code' => '8001',
                    'greater_area_id' => '1'
                ),
            10 =>
                array(
                    'id' => 11,
                    'name' => 'Tamboerskloof',
                    'slug' => 'tamboerskloof',
                    'postal_code' => '8001',
                    'greater_area_id' => '1'
                ),
            11 =>
                array(
                    'id' => 12,
                    'name' => 'University Estate',
                    'slug' => 'university-estate',
                    'postal_code' => '8001',
                    'greater_area_id' => '1'
                ),
            12 =>
                array(
                    'id' => 13,
                    'name' => 'Vredehoek',
                    'slug' => 'vredehoek',
                    'postal_code' => '8001',
                    'greater_area_id' => '1'
                ),
            13 =>
                array(
                    'id' => 14,
                    'name' => 'Walmer Estate (District Six)',
                    'slug' => 'walmer-estate',
                    'postal_code' => '7925',
                    'greater_area_id' => '1'
                ),
            14 =>
                array(
                    'id' => 15,
                    'name' => 'Lower Woodstock',
                    'slug' => 'lower-woodstock',
                    'postal_code' => '7925',
                    'greater_area_id' => '1'
                ),
            15 =>
                array(
                    'id' => 16,
                    'name' => 'Upper Woodstock',
                    'slug' => 'upper-woodstock',
                    'postal_code' => '7925',
                    'greater_area_id' => '1'
                ),
            16 =>
                array(
                    'id' => 17,
                    'name' => 'Zonnebloem (District Six)',
                    'slug' => 'zonnebloem',
                    'postal_code' => '7925',
                    'greater_area_id' => '1'
                ),

            // Northern Suburbs

            17 =>
                array(
                    'id' => 18,
                    'name' => 'Belhar',
                    'slug' => 'belhar',
                    'postal_code' => '7493',
                    'greater_area_id' => '2'
                ),
            18 =>
                array(
                    'id' => 19,
                    'name' => 'Bellville',
                    'slug' => 'bellville',
                    'postal_code' => '7530',
                    'greater_area_id' => '2'
                ),
            19 =>
                array(
                    'id' => 20,
                    'name' => 'Brackenfell',
                    'slug' => 'brackenfell',
                    'postal_code' => '7560',
                    'greater_area_id' => '2'
                ),
            20 =>
                array(
                    'id' => 21,
                    'name' => 'Bothasig',
                    'slug' => 'bothasig',
                    'postal_code' => '7441',
                    'greater_area_id' => '2'
                ),
            21 =>
                array(
                    'id' => 22,
                    'name' => 'Brooklyn',
                    'slug' => 'brooklyn',
                    'postal_code' => '7420',
                    'greater_area_id' => '2'
                ),
            22 =>
                array(
                    'id' => 23,
                    'name' => 'Durbanville',
                    'slug' => 'durbanville',
                    'postal_code' => '7551',
                    'greater_area_id' => '2'
                ),
            23 =>
                array(
                    'id' => 24,
                    'name' => 'Edgemead',
                    'slug' => 'edgemead',
                    'postal_code' => '7441',
                    'greater_area_id' => '2'
                ),
            24 =>
                array(
                    'id' => 25,
                    'name' => 'Elsie\'s River',
                    'slug' => 'elsies-river',
                    'postal_code' => '7490',
                    'greater_area_id' => '2'
                ),
            25 =>
                array(
                    'id' => 26,
                    'name' => 'Goodwood',
                    'slug' => 'goodwood',
                    'postal_code' => '7459',
                    'greater_area_id' => '2'
                ),
            26 =>
                array(
                    'id' => 27,
                    'name' => 'Kensington',
                    'slug' => 'kensington',
                    'postal_code' => '7405',
                    'greater_area_id' => '2'
                ),
            27 =>
                array(
                    'id' => 28,
                    'name' => 'Kraaifontein',
                    'slug' => 'kraaifontein',
                    'postal_code' => '7572',
                    'greater_area_id' => '2'
                ),
            28 =>
                array(
                    'id' => 29,
                    'name' => 'Kuils River',
                    'slug' => 'kuils-river',
                    'postal_code' => '7580',
                    'greater_area_id' => '2'
                ),
            29 =>
                array(
                    'id' => 30,
                    'name' => 'Loevenstein',
                    'slug' => 'loevenstein',
                    'postal_code' => '7530',
                    'greater_area_id' => '2'
                ),
            30 =>
                array(
                    'id' => 31,
                    'name' => 'Maitland',
                    'slug' => 'Milnerton',
                    'postal_code' => '7404',
                    'greater_area_id' => '2'
                ),
            31 =>
                array(
                    'id' => 32,
                    'name' => 'Milnerton',
                    'slug' => 'milnerton',
                    'postal_code' => '7404',
                    'greater_area_id' => '2'
                ),
            32 =>
                array(
                    'id' => 33,
                    'name' => 'Monte Vista',
                    'slug' => 'monte-vista',
                    'postal_code' => '7463',
                    'greater_area_id' => '2'
                ),
            33 =>
                array(
                    'id' => 34,
                    'name' => 'Panorama',
                    'slug' => 'panorama',
                    'postal_code' => '7506',
                    'greater_area_id' => '2'
                ),
            34 =>
                array(
                    'id' => 35,
                    'name' => 'Parow',
                    'slug' => 'parow',
                    'postal_code' => '7499',
                    'greater_area_id' => '2'
                ),
            35 =>
                array(
                    'id' => 36,
                    'name' => 'Plattekloof',
                    'slug' => 'plattekloof',
                    'postal_code' => '7500',
                    'greater_area_id' => '2'
                ),
            36 =>
                array(
                    'id' => 37,
                    'name' => 'Rugby',
                    'slug' => 'rugby',
                    'postal_code' => '7405',
                    'greater_area_id' => '2'
                ),
            37 =>
                array(
                    'id' => 38,
                    'name' => 'Thornton',
                    'slug' => 'thornton',
                    'postal_code' => '7485',
                    'greater_area_id' => '2'
                ),

            // Atlantic Seaboard

            38 =>
                array(
                    'id' => 39,
                    'name' => 'Bantry Bay',
                    'slug' => 'bantry-bay',
                    'postal_code' => '8005',
                    'greater_area_id' => '3'
                ),
            39 =>
                array(
                    'id' => 40,
                    'name' => 'Camps Bay',
                    'slug' => 'camps-bay',
                    'postal_code' => '8040',
                    'greater_area_id' => '3'
                ),
            41 =>
                array(
                    'id' => 42,
                    'name' => 'Clifton',
                    'slug' => 'clifton',
                    'postal_code' => '8005',
                    'greater_area_id' => '3'
                ),
            42 =>
                array(
                    'id' => 43,
                    'name' => 'Fresnay',
                    'slug' => 'fresnay',
                    'postal_code' => '8005',
                    'greater_area_id' => '3'
                ),
            43 =>
                array(
                    'id' => 44,
                    'name' => 'Green Point',
                    'slug' => 'green-point',
                    'postal_code' => '8051',
                    'greater_area_id' => '3'
                ),
            44 =>
                array(
                    'id' => 45,
                    'name' => 'Hout Bay',
                    'slug' => 'hout-bay',
                    'postal_code' => '7872',
                    'greater_area_id' => '3'
                ),
            45 =>
                array(
                    'id' => 46,
                    'name' => 'Llandudno',
                    'slug' => 'llundadno',
                    'postal_code' => '7806',
                    'greater_area_id' => '3'
                ),
            46 =>
                array(
                    'id' => 47,
                    'name' => 'Mouille Point',
                    'slug' => 'mouille-point',
                    'postal_code' => '8005',
                    'greater_area_id' => '3'
                ),
            47 =>
                array(
                    'id' => 48,
                    'name' => 'Sea Point',
                    'slug' => 'sea-point',
                    'postal_code' => '8060',
                    'greater_area_id' => '3'
                ),
            48 =>
                array(
                    'id' => 49,
                    'name' => 'Three Anchor Bay',
                    'slug' => 'three-anchor-bay',
                    'postal_code' => '8005',
                    'greater_area_id' => '3'
                ),

            // Southern Suburbs

            49 =>
                array(
                    'id' => 50,
                    'name' => 'Bergvliet',
                    'slug' => 'bergvliet',
                    'postal_code' => '7864',
                    'greater_area_id' => '4'
                ),
            50 =>
                array(
                    'id' => 51,
                    'name' => 'Bishopscourt',
                    'slug' => 'bishopscourt',
                    'postal_code' => '7708',
                    'greater_area_id' => '4'
                ),
            51 =>
                array(
                    'id' => 52,
                    'name' => 'Claremont',
                    'slug' => 'claremont',
                    'postal_code' => '7735',
                    'greater_area_id' => '4'
                ),
            52 =>
                array(
                    'id' => 53,
                    'name' => 'Constantia',
                    'slug' => 'constantia',
                    'postal_code' => '7848',
                    'greater_area_id' => '4'
                ),
            53 =>
                array(
                    'id' => 54,
                    'name' => 'Lansdowne',
                    'slug' => 'lansdowne',
                    'postal_code' => '7779',
                    'greater_area_id' => '4'
                ),
            54 =>
                array(
                    'id' => 55,
                    'name' => 'Diep River',
                    'slug' => 'diep-river',
                    'postal_code' => '7800',
                    'greater_area_id' => '4'
                ),
            55 =>
                array(
                    'id' => 56,
                    'name' => 'Harfield Village',
                    'slug' => 'harfield-village',
                    'postal_code' => '7708',
                    'greater_area_id' => '4'
                ),
            56 =>
                array(
                    'id' => 57,
                    'name' => 'Heathfield',
                    'slug' => 'heathfield',
                    'postal_code' => '7945',
                    'greater_area_id' => '4'
                ),
            57 =>
                array(
                    'id' => 58,
                    'name' => 'Kenilworth',
                    'slug' => 'keniworth',
                    'postal_code' => '7745',
                    'greater_area_id' => '4'
                ),
            58 =>
                array(
                    'id' => 59,
                    'name' => 'Kenwyn',
                    'slug' => 'kenwyn',
                    'postal_code' => '7780',
                    'greater_area_id' => '4'
                ),
            59 =>
                array(
                    'id' => 60,
                    'name' => 'Kirstenhof',
                    'slug' => 'kirstenhof',
                    'postal_code' => '7945',
                    'greater_area_id' => '4'
                ),
            60 =>
                array(
                    'id' => 61,
                    'name' => 'Kreupelbosch',
                    'slug' => 'kreupelbosch',
                    'postal_code' => '7806',
                    'greater_area_id' => '4'
                ),
            61 =>
                array(
                    'id' => 62,
                    'name' => 'Meadowridge',
                    'slug' => 'meadowridge',
                    'postal_code' => '7806',
                    'greater_area_id' => '4'
                ),
            62 =>
                array(
                    'id' => 63,
                    'name' => 'Mowbray',
                    'slug' => 'mowbray',
                    'postal_code' => '7705',
                    'greater_area_id' => '4'
                ),
            63 =>
                array(
                    'id' => 64,
                    'name' => 'Ndabeni',
                    'slug' => 'ndabeni',
                    'postal_code' => '7405',
                    'greater_area_id' => '4'
                ),
            64 =>
                array(
                    'id' => 65,
                    'name' => 'Newlands',
                    'slug' => 'newlands',
                    'postal_code' => '7725',
                    'greater_area_id' => '4'
                ),
            65 =>
                array(
                    'id' => 66,
                    'name' => 'Observatory',
                    'slug' => 'observatory',
                    'postal_code' => '7935',
                    'greater_area_id' => '4'
                ),
            66 =>
                array(
                    'id' => 67,
                    'name' => 'Pinelands',
                    'slug' => 'pinelands',
                    'postal_code' => '7405',
                    'greater_area_id' => '4'
                ),
            67 =>
                array(
                    'id' => 68,
                    'name' => 'Plumstead',
                    'slug' => 'plumstead',
                    'postal_code' => '7801',
                    'greater_area_id' => '4'
                ),
            68 =>
                array(
                    'id' => 69,
                    'name' => 'Retreat',
                    'slug' => 'retreat',
                    'postal_code' => '7965',
                    'greater_area_id' => '4'
                ),
            69 =>
                array(
                    'id' => 70,
                    'name' => 'Rondebosch',
                    'slug' => 'rondebosch',
                    'postal_code' => '7701',
                    'greater_area_id' => '4'
                ),
            70 =>
                array(
                    'id' => 71,
                    'name' => 'Rondebosch East',
                    'slug' => 'rondebosch-east',
                    'postal_code' => '7780',
                    'greater_area_id' => '4'
                ),
            71 =>
                array(
                    'id' => 72,
                    'name' => 'Rosebank',
                    'slug' => 'rosebank',
                    'postal_code' => '7700',
                    'greater_area_id' => '4'
                ),
            72 =>
                array(
                    'id' => 73,
                    'name' => 'Steenberg',
                    'slug' => 'steenberg',
                    'postal_code' => '7945',
                    'greater_area_id' => '4'
                ),
            73 =>
                array(
                    'id' => 74,
                    'name' => 'Southfield',
                    'slug' => 'southfield',
                    'postal_code' => '7880',
                    'greater_area_id' => '4'
                ),
            74 =>
                array(
                    'id' => 75,
                    'name' => 'Tokai',
                    'slug' => 'tokai',
                    'postal_code' => '7966',
                    'greater_area_id' => '4'
                ),
            75 =>
                array(
                    'id' => 76,
                    'name' => 'Wynberg',
                    'slug' => 'wynberg',
                    'postal_code' => '7824',
                    'greater_area_id' => '4'
                ),

            // South Peninsula

            77 =>
                array(
                    'id' => 78,
                    'name' => 'Capri Village',
                    'slug' => 'capri-village',
                    'postal_code' => '7975',
                    'greater_area_id' => '5'
                ),
            78 =>
                array(
                    'id' => 79,
                    'name' => 'Clovelly',
                    'slug' => 'clovelly',
                    'postal_code' => '7975',
                    'greater_area_id' => '5'
                ),
            79 =>
                array(
                    'id' => 80,
                    'name' => 'Fish Hoek',
                    'slug' => 'fish-hoek',
                    'postal_code' => '7974',
                    'greater_area_id' => '5'
                ),
            80 =>
                array(
                    'id' => 81,
                    'name' => 'Glencairn',
                    'slug' => 'glencairn',
                    'postal_code' => '7975',
                    'greater_area_id' => '5'
                ),
            81 =>
                array(
                    'id' => 82,
                    'name' => 'Kalk Bay',
                    'slug' => 'kalk-bay',
                    'postal_code' => '7990',
                    'greater_area_id' => '5'
                ),
            82 =>
                array(
                    'id' => 83,
                    'name' => 'Kommetjie',
                    'slug' => 'kommetjie',
                    'postal_code' => '7976',
                    'greater_area_id' => '5'
                ),
            83 =>
                array(
                    'id' => 84,
                    'name' => 'Lakeside',
                    'slug' => 'lakeside',
                    'postal_code' => '7946',
                    'greater_area_id' => '5'
                ),
            84 =>
                array(
                    'id' => 85,
                    'name' => 'Marina De Gama',
                    'slug' => 'marina-de-gama',
                    'postal_code' => '7945',
                    'greater_area_id' => '5'
                ),
            85 =>
                array(
                    'id' => 86,
                    'name' => 'Muizenberg',
                    'slug' => 'muizenberg',
                    'postal_code' => '7950',
                    'greater_area_id' => '5'
                ),
            86 =>
                array(
                    'id' => 87,
                    'name' => 'Noordhoek',
                    'slug' => 'noordhoek',
                    'postal_code' => '7979',
                    'greater_area_id' => '5'
                ),
            87 =>
                array(
                    'id' => 88,
                    'name' => 'Ocean View',
                    'slug' => 'ocean-view',
                    'postal_code' => '7975',
                    'greater_area_id' => '5'
                ),
            88 =>
                array(
                    'id' => 89,
                    'name' => 'Scarborough',
                    'slug' => 'scarborough',
                    'postal_code' => '7975',
                    'greater_area_id' => '5'
                ),
            89 =>
                array(
                    'id' => 90,
                    'name' => 'Simon\'s Town',
                    'slug' => 'simons-town',
                    'postal_code' => '7995',
                    'greater_area_id' => '5'
                ),
            90 =>
                array(
                    'id' => 91,
                    'name' => 'St James',
                    'slug' => 'st-james',
                    'postal_code' => '7946',
                    'greater_area_id' => '5'
                ),
            919 =>
                array(
                    'id' => 92,
                    'name' => 'Sunnydale',
                    'slug' => 'sunnydale',
                    'postal_code' => '7975',
                    'greater_area_id' => '5'
                ),
            92 =>
                array(
                    'id' => 93,
                    'name' => 'Sun Valley',
                    'slug' => 'sun-valley',
                    'postal_code' => '7985',
                    'greater_area_id' => '5'
                ),

            // Cape Flats

            93 =>
                array(
                    'id' => 94,
                    'name' => 'Athlone',
                    'slug' => 'athlone',
                    'postal_code' => '7760',
                    'greater_area_id' => '5'
                ),
            94 =>
                array(
                    'id' => 95,
                    'name' => 'Bishop Lavis',
                    'slug' => 'bishop-lavis',
                    'postal_code' => '7490',
                    'greater_area_id' => '6'
                ),
            95 =>
                array(
                    'id' => 96,
                    'name' => 'Bonteheuwel',
                    'slug' => 'bonteheuwel',
                    'postal_code' => '7764',
                    'greater_area_id' => '6'
                ),
            96 =>
                array(
                    'id' => 97,
                    'name' => 'Delft',
                    'slug' => 'delft',
                    'postal_code' => '7100',
                    'greater_area_id' => '6'
                ),
            97 =>
                array(
                    'id' => 98,
                    'name' => 'Elsies River',
                    'slug' => 'elsies-river',
                    'postal_code' => '7490',
                    'greater_area_id' => '6'
                ),
            98 =>
                array(
                    'id' => 99,
                    'name' => 'Epping',
                    'slug' => 'epping',
                    'postal_code' => '7460',
                    'greater_area_id' => '6'
                ),
            99 =>
                array(
                    'id' => 100,
                    'name' => 'Grassy Park',
                    'slug' => 'grassy-park',
                    'postal_code' => '7888',
                    'greater_area_id' => '6'
                ),
            100 =>
                array(
                    'id' => 101,
                    'name' => 'Gugulethu',
                    'slug' => 'gugulethu',
                    'postal_code' => '7750',
                    'greater_area_id' => '6'
                ),
            101 =>
                array(
                    'id' => 102,
                    'name' => 'Hanover Park',
                    'slug' => 'hanover-park',
                    'postal_code' => '0000',
                    'greater_area_id' => '6'
                ),
            102 =>
                array(
                    'id' => 103,
                    'name' => 'Kalksteenfontein',
                    'slug' => 'kalksteenfontein',
                    'postal_code' => '7490',
                    'greater_area_id' => '6'
                ),
            103 =>
                array(
                    'id' => 104,
                    'name' => 'Khayalitsha',
                    'slug' => 'khayalitsha',
                    'postal_code' => '7783',
                    'greater_area_id' => '6'
                ),
            104 =>
                array(
                    'id' => 105,
                    'name' => 'Langa',
                    'slug' => 'langa',
                    'postal_code' => '7456',
                    'greater_area_id' => '6'
                ),
            105 =>
                array(
                    'id' => 106,
                    'name' => 'Crawford',
                    'slug' => 'crawford',
                    'postal_code' => '7770',
                    'greater_area_id' => '6'
                ),
            106 =>
                array(
                    'id' => 107,
                    'name' => 'Lavender Hill',
                    'slug' => 'lavender-hill',
                    'postal_code' => '7945',
                    'greater_area_id' => '6'
                ),
            107 =>
                array(
                    'id' => 108,
                    'name' => 'Lotus River',
                    'slug' => 'lotus-river',
                    'postal_code' => '7805',
                    'greater_area_id' => '6'
                ),
            108 =>
                array(
                    'id' => 109,
                    'name' => 'Macassar',
                    'slug' => 'macassar',
                    'postal_code' => '7134',
                    'greater_area_id' => '6'
                ),
            109 =>
                array(
                    'id' => 110,
                    'name' => 'Manenberg',
                    'slug' => 'manenberg',
                    'postal_code' => '0000',
                    'greater_area_id' => '6'
                ),
            110 =>
                array(
                    'id' => 111,
                    'name' => 'Mitchells Plain',
                    'slug' => 'mitchells-plain',
                    'postal_code' => '7789',
                    'greater_area_id' => '6'
                ),
            111 =>
                array(
                    'id' => 112,
                    'name' => 'Nyanga',
                    'slug' => 'nyanga',
                    'postal_code' => '7755',
                    'greater_area_id' => '6'
                ),
            112 =>
                array(
                    'id' => 113,
                    'name' => 'Ottery',
                    'slug' => 'ottery',
                    'postal_code' => '7808',
                    'greater_area_id' => '6'
                ),
            113 =>
                array(
                    'id' => 114,
                    'name' => 'Pelican Park',
                    'slug' => 'pelican-park',
                    'postal_code' => '7941',
                    'greater_area_id' => '6'
                ),
            114 =>
                array(
                    'id' => 115,
                    'name' => 'Philippi',
                    'slug' => 'philippi',
                    'postal_code' => '7750',
                    'greater_area_id' => '6'
                ),
            115 =>
                array(
                    'id' => 116,
                    'name' => 'Samora Machel',
                    'slug' => 'samora-machel',
                    'postal_code' => '7785',
                    'greater_area_id' => '6'
                ),
            116 =>
                array(
                    'id' => 117,
                    'name' => 'Strandfontein',
                    'slug' => 'strandfontein',
                    'postal_code' => '7798',
                    'greater_area_id' => '6'
                ),
            117 =>
                array(
                    'id' => 118,
                    'name' => 'Valhalla Park',
                    'slug' => 'valhalla-park',
                    'postal_code' => '7490',
                    'greater_area_id' => '6'
                ),

            // Helderberg

            118 =>
                array(
                    'id' => 119,
                    'name' => 'Firgrove',
                    'slug' => 'firgrove',
                    'postal_code' => '7110',
                    'greater_area_id' => '6'
                ),
            119 =>
                array(
                    'id' => 120,
                    'name' => 'Gordon\'s Bay',
                    'slug' => 'gordons-bay',
                    'postal_code' => '7140',
                    'greater_area_id' => '6'
                ),
            120 =>
                array(
                    'id' => 121,
                    'name' => 'Somerset West',
                    'slug' => 'somerset-west',
                    'postal_code' => '7130',
                    'greater_area_id' => '7'
                ),
            121 =>
                array(
                    'id' => 122,
                    'name' => 'Strand',
                    'slug' => 'strand',
                    'postal_code' => '7139',
                    'greater_area_id' => '7'
                ),

            // West Coast

            122 =>
                array(
                    'id' => 123,
                    'name' => 'Atlantis',
                    'slug' => 'atlantis',
                    'postal_code' => '7349',
                    'greater_area_id' => '7'
                ),
            123 =>
                array(
                    'id' => 124,
                    'name' => 'Bloubergstrand',
                    'slug' => 'bloubergstrand',
                    'postal_code' => '7441',
                    'greater_area_id' => '7'
                ),
            124 =>
                array(
                    'id' => 125,
                    'name' => 'Mamre',
                    'slug' => 'mamre',
                    'postal_code' => '7349',
                    'greater_area_id' => '8'
                ),
            125 =>
                array(
                    'id' => 126,
                    'name' => 'Melkbosstrand',
                    'slug' => 'melkbosstrand',
                    'postal_code' => '7441',
                    'greater_area_id' => '8'
                ),
            126 =>
                array(
                    'id' => 127,
                    'name' => 'Milnerton',
                    'slug' => 'milnerton',
                    'postal_code' => '7435',
                    'greater_area_id' => '8'
                ),
            127 =>
                array(
                    'id' => 128,
                    'name' => 'Montague Gardens',
                    'slug' => 'montague-gardens',
                    'postal_code' => '7441',
                    'greater_area_id' => '8'
                ),
            128 =>
                array(
                    'id' => 129,
                    'name' => 'Parklands',
                    'slug' => 'parklands',
                    'postal_code' => '7441',
                    'greater_area_id' => '8'
                ),
            129 =>
                array(
                    'id' => 130,
                    'name' => 'Table View',
                    'slug' => 'table-view',
                    'postal_code' => '7439',
                    'greater_area_id' => '8'
                ),
            130 =>
                array(
                    'id' => 131,
                    'name' => 'West Beach',
                    'slug' => 'west-beach',
                    'postal_code' => '7441',
                    'greater_area_id' => '8'
                )
        ));
    }
}
