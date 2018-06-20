<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ExtrasTableSeeder::class);
        $this->call(RequirementsTableSeeder::class);
        $this->call(GreaterAreasTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
    }
}
