<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TheSportDBController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post("sports", [TheSportDBController::class, 'getAllSports']);
Route::post("leagues", [TheSportDBController::class, 'getAllLeagues']);
Route::post("leagues/teams", [TheSportDBController::class, 'getAllTeamsInALeague']);
Route::post("search/player", [TheSportDBController::class, 'getPlayerByName']);

Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "Dashboard",
    ]);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';