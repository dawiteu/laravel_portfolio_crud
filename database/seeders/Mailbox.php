<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Mailbox extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mailbox')->insert([
            "name"  => "Admin",
            "email" => "noreply@tonportfolio.com",
            "subject" => "Bienvenu sur le site!", 
            "message" => "Bonjour et bienvenu sur ton site. Ceci est un exemple de message reçu dans ta mailbox.",
            "lu" => 0,
            "created_at" => now()
        ]);
    }
}
