<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Skill extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            [
                "technologie" => "html",
                "value"       => 100,
                "created_at"  => now()
            ],
            [
                "technologie" => "css",
                "value"       => 90,
                "created_at"  => now()
            ],
            [
                "technologie" => "javascript",
                "value"       => 75,
                "created_at"  => now()
            ],
            [
                "technologie" => "php",
                "value"       => 80,
                "created_at"  => now()
            ],
            [
                "technologie" => "wordpress/cms",
                "value"       => 90,
                "created_at"  => now()
            ],
            [
                "technologie" => "photoshop",
                "value"       => 55,
                "created_at"  => now()
            ],
        ]);
    }
}
