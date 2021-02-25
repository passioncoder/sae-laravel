<?php

namespace Database\Seeders;

use App\Models\Posting;
use App\Models\User;
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
        $users = User::factory(10)->create();

        foreach (range(1,50) as $x) {

            Posting::factory()->create([

                'user_id' => $users->random()->id,
            ]);
        }
    }
}
