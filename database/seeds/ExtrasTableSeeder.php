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

        DB::table('sizes')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Extra Small',
                    'slug' => 'extra-small',
                    'initial' => 'XS',
                    'description' => ''
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'Small',
                    'slug' => 'small',
                    'initial' => 'S',
                    'description' => ''
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Medium',
                    'slug' => 'medium',
                    'initial' => 'M',
                    'description' => ''
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'Large',
                    'slug' => 'large',
                    'initial' => 'L',
                    'description' => ''
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => 'Extra Large',
                    'slug' => 'extra-large',
                    'initial' => 'XL',
                    'description' => ''
                ),
            5 =>
                array(
                    'id' => 6,
                    'name' => 'Extra Extra Large',
                    'slug' => 'extra-extra-large',
                    'initial' => 'XXL',
                    'description' => ''
                ),
        ));
    }
}
