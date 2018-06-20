<?php

use Illuminate\Database\Seeder;

class RequirementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('requirements')->delete();

        DB::table('requirements')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'No Smoking',
                    'slug' => 'no-smoking',
                    'description' => 'No smoking in house.',
                    'input_type' => 'checkbox'
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'No Guests',
                    'slug' => 'no-guests',
                    'description' => 'No guests allowed on property.',
                    'input_type' => 'checkbox'
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => '3 Months Bank Slips',
                    'slug' => '3-months-bank-slips',
                    'description' => '3 Months banks slips required.',
                    'input_type' => 'checkbox'
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'Credit Check',
                    'slug' => 'credit-check',
                    'description' => 'You be required to pass a credit check.',
                    'input_type' => 'checkbox'
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => 'Referrals',
                    'slug' => 'referrals',
                    'description' => 'Past house share referrals required.',
                    'input_type' => 'checkbox'
                ),
            5 =>
                array(
                    'id' => 6,
                    'name' => 'Own Furniture',
                    'slug' => 'own-furniture',
                    'description' => 'The room is unfurnished, own furniture required.',
                    'input_type' => 'checkbox'
                ),
            6 =>
                array(
                    'id' => 7,
                    'name' => 'Limited use of house',
                    'slug' => 'limited-use-of-house',
                    'description' => 'You will have limited use of the house. To be discussed between the lessor and lessee.',
                    'input_type' => 'checkbox'
                ),
            7 =>
                array(
                    'id' => 8,
                    'name' => 'Shared Electricity',
                    'slug' => 'shared-electricity',
                    'description' => 'Electricity will be shared/split between tenants.',
                    'input_type' => 'checkbox'
                ),
            8 =>
                array(
                    'id' => 9,
                    'name' => 'Shared Water',
                    'slug' => 'shared-water',
                    'description' => 'Water will be shared/split between tenants.',
                    'input_type' => 'checkbox'
                ),
            9 =>
                array(
                    'id' => 10,
                    'name' => 'No Pets',
                    'slug' => 'no-pets',
                    'description' => 'No pets will be allowed.',
                    'input_type' => 'checkbox'
                )
        ));
    }
}
