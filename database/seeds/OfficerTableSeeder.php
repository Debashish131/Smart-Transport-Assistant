<?php

use Illuminate\Database\Seeder;

class OfficerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('officers')->insert(array(
            array(
                'name' => "police",
                'email' => 'police@gmail.com',
                'password' => bcrypt('123456'),
            ),
            array(
                'name' => "surgent",
                'email' => 'surgent@gmail.com',
                'password' => bcrypt('123456'),
            )
        ));

    }
}
