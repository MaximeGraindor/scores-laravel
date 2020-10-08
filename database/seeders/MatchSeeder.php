<?php

namespace Database\Seeders;

use App\Models\Match;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Match::create([
            'date' => Carbon::now(),
            'slug' => 'LIVCHE',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Match::create([
            'date' => Carbon::now(),
            'slug' => 'ARSPSG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        /*Match::create([
            'date' => Carbon::now(),
            'slug' => 'JUVREA',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Match::create([
            'date' => Carbon::now(),
            'slug' => 'MANLIV',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Match::create([
            'date' => Carbon::now(),
            'slug' => 'JUVARS',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Match::create([
            'date' => Carbon::now(),
            'slug' => 'REALIV',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);*/

    }
}
