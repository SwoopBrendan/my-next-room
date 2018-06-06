<?php

use Illuminate\Database\Seeder;

class GreaterAreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('greater_areas')->delete();

        DB::table('greater_areas')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'City Bowl',
                    'slug' => 'city-bowl',
                    'description' => 'Cape Town City Bowl'
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'Northern Suburbs',
                    'slug' => 'northern-suburbs',
                    'description' => 'Beyond the boerwors curtain.'
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Atlantic Seaboard',
                    'slug' => 'atlantic-seaboard',
                    'description' => 'It\'s all about the lifestyle bruh.'
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'Southern Suburbs',
                    'slug' => 'southern-suburbs',
                    'description' => 'Fade cuts and over-priced beers.'
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => 'South Peninsula',
                    'slug' => 'south-peninsula',
                    'description' => 'Without the hustle and bustle of town but with the 2 hour commute to the hustle and bustle of town.'
                ),
            5 =>
                array(
                    'id' => 6,
                    'name' => 'Cape Flats',
                    'slug' => 'cape-flats',
                    'description' => 'Can\'t hear you over the load *banging* noises.'
                ),
            6 =>
                array(
                    'id' => 7,
                    'name' => 'Helderberg',
                    'slug' => 'helderberg',
                    'description' => 'They like to say it\'s Cape Town, but is it? Reeeaaally?'
                ),
            7 =>
                array(
                    'id' => 8,
                    'name' => 'West Coast',
                    'slug' => 'west-coast',
                    'description' => 'Very pretty and very windy'
                )
        ));
    }
}
