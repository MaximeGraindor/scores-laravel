<?php

namespace App\Http\Controllers;

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
        $infoHomeTeam = DB::table('teams')->where('name',request('home-team'))->get();
        $infoAwayTeam = DB::table('teams')->where('name',request('away-team'))->get();

        $matchToSave = new Match();
        $matchToSave->date = request('match-date');
        $matchToSave->slug = $infoHomeTeam[0]->slug.$infoAwayTeam[0]->slug;
        $matchToSave->save();

        $participationHomeTeam = new Participation();
        $participationHomeTeam->match_id = $matchToSave->id;
        $participationHomeTeam->team_id = $infoHomeTeam[0]->id;
        $participationHomeTeam->goals = request('home-team-goals');
        $participationHomeTeam->is_home = 1;
        $participationHomeTeam->save();

        $participationAwayTeam = new Participation();
        $participationAwayTeam->match_id = $matchToSave->id;
        $participationAwayTeam->team_id = $infoAwayTeam[0]->id;
        $participationAwayTeam->goals = request('away-team-goals');
        $participationAwayTeam->is_home = 0;
        $participationAwayTeam->save();

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
