<?php

use Illuminate\Database\Seeder;

class VehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('vehicle_infos')->insert(array(
            array(
                'id' => '1',
                'VehicleType' => 'Light Vehicle',
                'BRTAoffice' => '12546',
                'Vehicle_number' => 'Dha-L-2050',
                'Condition' => 'No Image',
                'Issue_date' => '2019-11-10',
                'Expire_date' => '2019-11-11',
                'owner_id' => "1",
            ),

            array(
                'id' => '2',
                'VehicleType' => 'Medium Vehicle',
                'BRTAoffice' => '45789',
                'Vehicle_number' => 'Dha-L-2043',
                'Condition' => 'No Image',
                'Issue_date' => '2019-1-10',
                'Expire_date' => '2119-11-11',
                'owner_id' => "2",
            ),
        ));
    }
}
