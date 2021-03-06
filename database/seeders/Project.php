<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Project extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                "img" => "portfolio-1.jpg",
                "link" => "/portfolio-detail",
                "cat"  => "app", 
                "created_at" => now()
            ],
            [
                "img" => "portfolio-2.jpg",
                "link" => "/portfolio-detail",
                "cat"  => "web", 
                "created_at" => now()
            ],
            [
                "img" => "portfolio-3.jpg",
                "link" => "/portfolio-detail",
                "cat"  => "app", 
                "created_at" => now()
            ],
            [
                "img" => "portfolio-4.jpg",
                "link" => "/portfolio-detail",
                "cat"  => "card", 
                "created_at" => now()
            ],
            [
                "img" => "portfolio-5.jpg",
                "link" => "/portfolio-detail",
                "cat"  => "web", 
                "created_at" => now()
            ],
            [
                "img" => "portfolio-6.jpg",
                "link" => "/portfolio-detail",
                "cat"  => "app", 
                "created_at" => now()
            ],
            [
                "img" => "portfolio-6.jpg",
                "link" => "/portfolio-detail",
                "cat"  => "card", 
                "created_at" => now()
            ],
            [
                "img" => "portfolio-6.jpg",
                "link" => "/portfolio-detail",
                "cat"  => "card", 
                "created_at" => now()
            ],
            [
                "img" => "portfolio-9.jpg",
                "link" => "/portfolio-detail",
                "cat"  => "web", 
                "created_at" => now()
            ],
        ]);
    }
}
