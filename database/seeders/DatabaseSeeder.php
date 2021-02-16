<?php

namespace Database\Seeders;

use App\Models\Posting;
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

        Posting::factory(10)->create();
    }
}
