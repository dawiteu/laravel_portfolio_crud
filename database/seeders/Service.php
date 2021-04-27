<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Service extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                "icon" => "icofont-computer",
                "title" => "Lorem Ipsum",
                "desc" => "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
                "created_at" => now()
            ],
            [
                "icon" => "icofont-image",
                "title" => "Magni Dolores",
                "desc" => "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
                "created_at" => now()
            ],
            [
                "icon" => "icofont-chart-bar-graph",
                "title" => "Dolor Sitema",
                "desc" => "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
                "created_at" => now()
            ],
            [
                "icon" => "icofont-settings",
                "title" => "Nemo Enim",
                "desc" => "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
                "created_at" => now()
            ],
            [
                "icon" => "icofont-earth",
                "title" => "Sed ut perspiciatis",
                "desc" => "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
                "created_at" => now()
            ],
            [
                "icon" => "icofont-tasks-alt",
                "title" => "Eiusmod Tempor",
                "desc" => "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
                "created_at" => now()
            ],
        ]);
    }
}
