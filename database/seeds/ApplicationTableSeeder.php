<?php

use Illuminate\Database\Seeder;

class ApplicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('registration_for_r_c_s')->insert(array(
            array(
                'id' => '1',
                'Name' => 'Dev',
                'Creator' => 'Dev',
                'FatherName' => 'Samrat Roy',
                'DOB' => '2019-11-28',
                'BloodGroup' => 'B+',
                'NID' => '12589674589612538',
                'Occupation' => "Student",
                'Address' => 'Mohammadpur',
                'PermanentAddress' => 'Thakurgaon',
                'Phone' => '0178896526',
                'Email' => 'dev@gmail.com',
                'EmergencyContact' => '01785228885',
            ),

            array(
                'id' => '2',
                'Name' => 'Test',
                'Creator' => 'Test',
                'FatherName' => 'Test Roy',
                'DOB' => '2019-11-10',
                'BloodGroup' => 'o+',
                'NID' => '125896745Test89612538',
                'Occupation' => "Test",
                'Address' => 'Test',
                'PermanentAddress' => 'Test',
                'Phone' => '0178896526',
                'Email' => 'dev@gmail.com',
                'EmergencyContact' => '01785228885',
            ),
        ));
    }
}
