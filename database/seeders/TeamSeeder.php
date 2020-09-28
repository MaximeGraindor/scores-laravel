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
            'file_name' => 'liverpool.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Team::insert([
            'name' => 'Chelsea',
            'slug' => 'CHE',
            'file_name' => 'chelsea.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Team::insert([
            'name' => 'Arsenal',
            'slug' => 'ARS',
            'file_name' => 'arsenal.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Team::insert([
            'name' => 'Paris Saint-Germain',
            'slug' => 'PSG',
            'file_name' => 'paris-saint-germain.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Team::insert([
            'name' => 'Juventus',
            'slug' => 'JUV',
            'file_name' => 'juventus.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Team::insert([
            'name' => 'Real Madrid',
            'slug' => 'REA',
            'file_name' => 'real-madrid.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Team::insert([
            'name' => 'Manchester',
            'slug' => 'MAN',
            'file_name' => 'manchester.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
