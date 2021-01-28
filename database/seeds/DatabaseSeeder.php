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
        $this->call(AdminsTableSeeder::class);
        $this->call(OfficerTableSeeder::class);
//        $this->call(UserTableSeeder::class);
//        $this->call(ApplicationTableSeeder::class);
//        $this->call(VehicleTableSeeder::class);

    }
}
