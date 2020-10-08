<?php

namespace Database\Seeders;

use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::insert([
            'name' => 'Liverpool',
            'slug' => 'LIV',
            'logo' => 'liverpool.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Team::insert([
            'name' => 'Chelsea',
            'slug' => 'CHE',
            'logo' => 'chelsea.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Team::insert([
            'name' => 'Arsenal',
            'slug' => 'ARS',
            'logo' => 'arsenal.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Team::insert([
            'name' => 'Paris Saint-Germain',
            'slug' => 'PSG',
            'logo' => 'paris-saint-germain.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Team::insert([
            'name' => 'Juventus',
            'slug' => 'JUV',
            'logo' => 'juventus.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Team::insert([
            'name' => 'Real Madrid',
            'slug' => 'REA',
            'logo' => 'real-madrid.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Team::insert([
            'name' => 'Manchester',
            'slug' => 'MAN',
            'logo' => 'manchester.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
