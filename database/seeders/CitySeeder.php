<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        DB::table('cities')->delete();
        $cities = array(
            array('name' => "Bombuflat",'state_id' => 1),
            array('name' => "Garacharma",'state_id' => 1),
            array('name' => "Addanki",'state_id' => 2),
            array('name' => "Adivivaram",'state_id' => 2),
            array('name' => "Namsai",'state_id' => 3),
            array('name' => "Pasighat",'state_id' => 3),
            array('name' => "Chapar",'state_id' => 4),
            array('name' => "Chekonidhara",'state_id' => 4),
            array('name' => "Dhaka",'state_id' => 5),
            array('name' => "Dighwara",'state_id' => 5),
            array('name' => "Una",'state_id' => 6),
            array('name' => "Unjha",'state_id' => 6),
            array('name' => "Upleta",'state_id' => 7),
            array('name' => "Utran",'state_id' => 7),
            array('name' => "Uttarsanda",'state_id' => 8),
            array('name' => "V.U. Nagar",'state_id' => 9),
            array('name' => "V.V. Nagar",'state_id' => 9),
            array('name' => "Vadia",'state_id' => 10),
            array('name' => "Vadla",'state_id' => 10),
            array('name' => "Vadnagar",'state_id' => 11),
            array('name' => "Vadodara",'state_id' => 11)
		);
        DB::table('cities')->insert($cities);
    }
}
