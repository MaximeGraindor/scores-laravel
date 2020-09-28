<?php

use App\Http\Controllers\DashboardController;
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

Route::get('/', [DashboardController::class, 'index']);
Route::get('team/create', [TeamController::class, 'index']);
Route::post('/', [TeamController::class, 'store']);
route::post('/', [ParticipationController::class, 'store']);