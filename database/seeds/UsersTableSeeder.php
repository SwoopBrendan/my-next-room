<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Brendan van der Meulen',
                    'email' => 'brendanvdmeulen@gmail.com',
                    'password' => Hash::make('bvdm@921113'),
                    'bio' => 'Admin User'
                )
        ));
    }
}
