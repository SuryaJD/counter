<?php

namespace Database\Seeders;

use App\Models\Pageview;
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
        Pageview::factory(10000)->create();
    }
}
