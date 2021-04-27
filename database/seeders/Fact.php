<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Fact extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            [
                "icon"  => "icofont-simple-smile",
                "title" => "Happy Clients",
                "desc" => "consequuntur quae", 
                "value" => 125,
                "created_at" => now()
            ],
            [
                "icon"  => "icofont-document-folder",
                "title" => "Projects",
                "desc" => "consequuntur quae", 
                "value" => 200,
                "created_at" => now()
            ],
            [
                "icon"  => "icofont-live-support",
                "title" => "Hours Of Support",
                "desc" => " aut commodi quaerat", 
                "value" => 1225,
                "created_at" => now()
            ],
            [
                "icon"  => "icofont-users-alt-5",
                "title" => "Hard Workers",
                "desc" => " rerum asperiores dolor", 
                "value" => 1250,
                "created_at" => now()
            ],
        ]);
    }
}
