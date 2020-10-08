<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\TeamStat;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TeamStatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = Team::with('matches.teams')->get();
        foreach ($teams as $team){
            TeamStat::insert([
                'team_id' => $team->id,
                'games' => $team->matches_count,
                'points' => $team->points,
                'wins' => $team->wins,
                'losses' => rand(0,10),
                'draws' => $team->draws,
                'goals_for' => $team->goals_for,
                'goals_against' => rand(0,10),
                'goals_difference' => $team->goals_difference,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
            }
    }
}
