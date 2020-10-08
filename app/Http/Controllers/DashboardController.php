<?php

namespace App\Http\Controllers;

use App\Models\Match;
use App\Models\TeamStat;
use Carbon\Carbon;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $sortMatches = request()->query('m');
        //$sortMatches = "home_team_name";

        $currentDate = Carbon::now()->isoFormat('dddd D YYYY');

        $teams = Team::All();
        $matches = Match::with('teams')->get();
        $teamsStats = DB::table('team_stats')->join('teams', 'team_stats.team_id', '=', 'teams.id')->orderBy('games', 'DESC')->get();

        $matches = $matches->sortBy($sortMatches);

        return view('dashboard', compact('currentDate', 'matches', 'teams', 'teamsStats', 'sortMatches'));
    }

}
