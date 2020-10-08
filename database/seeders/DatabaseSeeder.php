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
        $this->call([
            TeamSeeder::class,
            MatchSeeder::class,
            ParticipationSeeder::class,
            TeamStatSeeder::class,
            UserSeeder::class,
            RoleSeeder::class,
            RoleUserSeeder::class,
        ]);
    }
}
