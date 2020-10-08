<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMatchRequest;
use App\Models\Match;
use App\Models\Participation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParticipationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //$validatedData = $request->validated();

        $infoHomeTeam = DB::table('teams')->where('slug',request('home-team'))->first();
        $infoAwayTeam = DB::table('teams')->where('slug',request('away-team'))->first();

        $matchToSave = new Match();
        $matchToSave->date = request('match-date');
        $matchToSave->slug = request('home-team').request('away-team');
        $matchToSave->save();

        $participationHomeTeam = new Participation();
        $participationHomeTeam->match_id = $matchToSave->id;
        $participationHomeTeam->team_id = $infoHomeTeam->id;
        $participationHomeTeam->goals = request('home-team-goals');
        $participationHomeTeam->is_home = 1;
        $participationHomeTeam->save();

        $participationAwayTeam = new Participation();
        $participationAwayTeam->match_id = $matchToSave->id;
        $participationAwayTeam->team_id = $infoAwayTeam->id;
        $participationAwayTeam->goals = request('away-team-goals');
        $participationAwayTeam->is_home = 0;
        $participationAwayTeam->save();

        $test = $infoHomeTeam;

        /*$test->matches()->saveMany([
            new Match([''])
        ])*/


        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function show(Participation $participation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function edit(Participation $participation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participation $participation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participation $participation)
    {
        //
    }
}
