<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array(
                'name' => "Dev",
                'email' => 'dev@gmail.com',
                'password' => bcrypt('12345678'),
            ),
            array(
                'name' => "Test",
                'email' => 'testuser@gmail.com',
                'password' => bcrypt('12345678'),
            )
        ));
    }
}
