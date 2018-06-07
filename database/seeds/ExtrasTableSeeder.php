<?php

use Illuminate\Database\Seeder;

class ExtrasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extras')->delete();

        DB::table('extras')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Single bed',
                    'slug' => 'single-bed',
                    'description' => 'Single bed provided with room.',
                    'input_type' => 'checkbox'
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'Double bed',
                    'slug' => 'double-bed',
                    'description' => 'Double bed provided with room.',
                    'input_type' => 'checkbox',
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Queen bed',
                    'slug' => 'queen-bed',
                    'description' => 'Queen bed provided with room.',
                    'input_type' => 'checkbox'
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'King bed',
                    'slug' => 'king-bed',
                    'description' => 'King bed provided with room.',
                    'input_type' => 'checkbox'
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => 'En-Suite Bathroom',
                    'slug' => 'en-suite-bathroom',
                    'description' => 'Room has an en-suite bathroom.',
                    'input_type' => 'checkbox'
                ),
            5 =>
                array(
                    'id' => 6,
                    'name' => 'Electricity',
                    'slug' => 'electricity',
                    'description' => 'Electricity Included in rent.',
                    'input_type' => 'checkbox'
                ),
            6 =>
                array(
                    'id' => 7,
                    'name' => 'Water',
                    'slug' => 'water',
                    'description' => 'Water included in rent.',
                    'input_type' => 'checkbox'
                ),
            7 =>
                array(
                    'id' => 8,
                    'name' => 'Wi-Fi',
                    'slug' => 'wi-fi',
                    'description' => 'Wi-fi included in rent.',
                    'input_type' => 'checkbox'
                ),
            8 =>
                array(
                    'id' => 9,
                    'name' => 'Cleaning Products',
                    'slug' => 'cleaning-products',
                    'description' => 'Cleaning products included in rent.',
                    'input_type' => 'checkbox'
                ),
            9 =>
                array(
                    'id' => 10,
                    'name' => 'Weekly Cleaner',
                    'slug' => 'weekly-cleaner',
                    'description' => 'Cleaner comes in weekly.',
                    'input_type' => 'checkbox'
                ),
            10 =>
                array(
                    'id' => 11,
                    'name' => 'Linen',
                    'slug' => 'linen',
                    'description' => 'Linen included with room.',
                    'input_type' => 'checkbox'
                ),
            11 =>
                array(
                    'id' => 12,
                    'name' => 'Smoking Friendly',
                    'slug' => 'smoking-friendly',
                    'description' => 'The house is smoking friendly.',
                    'input_type' => 'checkbox'
                ),
            12 =>
                array(
                    'id' => 13,
                    'name' => '420 Friendly',
                    'slug' => '420-friendly',
                    'description' => 'The house is 420 friendly.',
                    'input_type' => 'checkbox'
                ),
            13 =>
                array(
                    'id' => 14,
                    'name' => 'Netflix',
                    'slug' => 'netflix',
                    'description' => 'The house has a Netflix account.',
                    'input_type' => 'checkbox'
                ),
            14 =>
                array(
                    'id' => 15,
                    'name' => 'Pet Friendly',
                    'slug' => 'pet-friendly',
                    'description' => 'The house is pet friendly.',
                    'input_type' => 'checkbox'
                ),
            15 =>
                array(
                    'id' => 16,
                    'name' => 'Separate Entrance',
                    'slug' => 'separate-entrance',
                    'description' => 'The room has a separate entrance.',
                    'input_type' => 'checkbox'
                ),
        ));
    }
}
