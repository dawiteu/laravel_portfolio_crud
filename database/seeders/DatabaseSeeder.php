<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            About::class, 
            User::class,
            Fact::class,
            Skill::class,
            Project::class,
            Portfolio::class,
            Contact::class,
            Mailbox::class,
            Page::class,
            Service::class,
        ]);
    }
}
