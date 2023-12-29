<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();
            $countries = array(
                array('id' => 1,'code' => 'AF' ,'name' => "Afghanistan",'phonecode' => 93),
                array('id' => 2,'code' => 'AL' ,'name' => "Albania",'phonecode' => 355),
                array('id' => 3,'code' => 'DZ' ,'name' => "Algeria",'phonecode' => 213),
                array('id' => 4,'code' => 'AS' ,'name' => "American Samoa",'phonecode' => 1684),
                array('id' => 5,'code' => 'AD' ,'name' => "Andorra",'phonecode' => 376)
                );
                DB::table('countries')->insert($countries);
            
    }
}
