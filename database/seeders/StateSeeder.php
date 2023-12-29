<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        DB::table('states')->delete();
        $states = array(
            array('name' => "Wardak",'country_id' => 1),
            array('name' => "Zabul",'country_id' => 1),
            array('name' => "Berat",'country_id' => 2),
            array('name' => "Bulqize",'country_id' => 2),
            array('name' => "Delvine",'country_id' => 2),
            array('name' => "ash-Shalif",'country_id' => 3),
            array('name' => "at-Tarif",'country_id' => 3),
            array('name' => "Eastern",'country_id' => 4),
            array('name' => "Manu'a",'country_id' => 4),
            array('name' => "Andorra la Vella",'country_id' => 5),
            array('name' => "Canillo",'country_id' => 5)
        );
        DB::table('states')->insert($states);
    }
}
