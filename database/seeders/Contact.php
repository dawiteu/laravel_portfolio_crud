<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Contact extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->insert([
            [
                "icon"   => "icofont-google-map",
                "method" => "Location",
                "value"  => "A108 Adam Street, New York, NY 535022",
                "class"  => "adress",
                "created_at" => now()
            ],
            [
                "icon"   => "icofont-envelope",
                "method" => "Email",
                "value"  => "e@mail.com",
                "class"  => "email",
                "created_at" => now()
            ],
            [
                "icon"   => "icofont-phone",
                "method" => "Call",
                "value"  => "+32 458 6547 85 21 654 20",
                "class"  => "phone",
                "created_at" => now()
            ]
        ]);
    }
}
