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
        $admin = User::factory()->create([

            'name' => 'Admin Istrator',
            'email' => 'admin@sae-laravel.local',
            'password' => 'secret',
        ]);

        $users = User::factory(9)->create();
        $users->add($admin);

        foreach (range(1,50) as $x) {

            Posting::factory()->create([

                'user_id' => $users->random()->id,
            ]);
        }
    }
}
