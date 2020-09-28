<?php

namespace App\Http\Controllers;

use App\Models\Match;
use App\Models\Participation;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $currentDate = Carbon::now()->isoFormat('dddd D YYYY');
        $teams = Team::with('matches')->get();

        $participations = DB::table('matches')
            ->select('participations.updated_at', 'match_id', 'teams.name', 'teams.slug', 'is_home', 'goals')
            ->join('participations', 'matches.id', '=', 'match_id')
            ->join('teams', 'participations.team_id', '=', 'teams.id')
            ->get();

        $matches = $this->fullMatch($participations);


        return view('dashboard', compact('currentDate','teams', 'matches'));
    }

    public function fullMatch($participations)
    {
        $matches = [];
        $tmp = null;
        foreach ($participations as $match) {
            if(!$match->is_home){
                $tmp = new \stdClass();
                $tmp->date = $match->updated_at;
                $tmp->away_team = $match->name;
                $tmp->away_team_goals = $match->goals;
                $matches[] = $tmp;
            }else{
                $tmp->home_team = $match->name;
                $tmp->home_team_goals = $match->goals;
            }

        }

        return $matches;
    }
}
