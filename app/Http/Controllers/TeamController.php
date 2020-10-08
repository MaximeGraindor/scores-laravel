<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamRequest;
use App\Models\Participation;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Image;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ///
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($imageName = null)
    {
        $teams = Team::All();
        return view('team.create', compact('teams', 'imageName'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeamRequest $request)
    {

        if($request->hasFile('logo')){
            $logo = Image::make($request->hasFile('logo'));
            $logo->resize(100,100);
            return $logo;
            $newName = $request->logo->hashName();
            $request->logo->storeAs('images', $newName)->resize(100,200);
        }

        $validatedData = $request->validated();
        $validatedData['logo'] = $request->logo->hashName();
        Team::create($validatedData);


        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {

        return $team;
        return view('team.update', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        return $team;
        //$extractTeam = substr(strrchr($request->getRequestUri(), "/"), 1);
            $team->update(
                ['name'=>$request->name],
                ['slug'=>$request->slug],
                ['logo'=>""]
            );

        return redirect('/team/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
