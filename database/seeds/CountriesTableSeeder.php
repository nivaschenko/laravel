<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder 
{
    public function run()
    {
        DB::table('countries')->delete();
        $countries = array(
            array(
                'name' => 'USA',
                'iso' => 'US',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'name' => 'Ireland',
                'iso' => 'IE',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'name' => 'Denmark',
                'iso' => 'DK',
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            )
        );
        DB::table('countries')->insert($countries);
    }
}