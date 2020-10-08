<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\ParticipationController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{sortMatches?}', [DashboardController::class, 'index']);

Route::post('/team', [TeamController::class, 'store'])->middleware('auth', 'can:create,App\Models\Team');
Route::get('team/create', [TeamController::class, 'create'])->middleware('auth', 'can:create,App\Models\Team');

//Route::get('team/{team}/edit', [TeamController::class, 'edit'])->middleware('auth', 'can:create,App\Models\Team');
Route::get('team/{team:slug}/edit', function(\App\Models\Team $team){
    return $team;
});
Route::get('team/{team:slug}', function(\App\Models\Team $team){
    return $team;
});
Route::get('match/{match}/edit', function(\App\Models\Match $match){
    return $match;
});
Route::put('team/{team}', [TeamController::class, 'update'])->middleware('auth', 'can:create,App\Models\Team');



Route::post('/match', [ParticipationController::class, 'store'])->middleware('auth', 'can:create,App\Models\Match');
Route::get('match/create', [MatchController::class, 'index'])->middleware('auth','can:create,App\Models\Match');



Route::get('/imgs/create/{imageName?}', [ImageController::class, 'create']);
Route::post('/imgs', [ImageController::class, 'store']);







