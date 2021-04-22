<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Personalinfo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personalinfo')->insert([
            [
                "pers_info_key" => "Birthday", 
                "pers_info_val" => "1 May 1995",
                "created_at" => now()
            ],
            [
                "pers_info_key" => "Website", 
                "pers_info_val" => "www.example.com",
                "created_at" => now()
            ],
            [
                "pers_info_key" => "Phone", 
                "pers_info_val" => "+123 456 7890",
                "created_at" => now()
            ],
            [
                "pers_info_key" => "City", 
                "pers_info_val" => "New York, USA",
                "created_at" => now()
            ],
            [
                "pers_info_key" => "Age", 
                "pers_info_val" => "30",         // date de db(t) general serait mieux!
                "created_at" => now()
            ],
            [
                "pers_info_key" => "Degree", 
                "pers_info_val" => "Master",
                "created_at" => now()
            ],
            [
                "pers_info_key" => "PhEmailone", 
                "pers_info_val" => "email@example.com",
                "created_at" => now()
            ],
            [
                "pers_info_key" => "Freelance", 
                "pers_info_val" => "Available",
                "created_at" => now()
            ],
        ]);
    }
}
