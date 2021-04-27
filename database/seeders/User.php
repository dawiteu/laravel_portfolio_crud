<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "prenom" => "Alex",
            "nom"    => "Smith", 
            "email"       => "email@example.com",         
            "date"       => "1995-05-01",          
            "tel"       => "+123 456 7890",         
            "website"       => "www.dawit.eu",          
            "degree"       => "Master",
            "city"       => "New York, USA",
            "freelance"       => "Avaible",
            "created_at"    => now()
        ]);
    }
}
