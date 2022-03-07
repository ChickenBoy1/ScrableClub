<?php

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

Route::get('/showPlayers', 'App\Http\Controllers\PlayerController@showPlayers');
//Route::get('/', return view('welcome');

//DB SETUP
Route::get('/insertPlayers', 'App\Http\Controllers\PlayerController@insertPlayers');
Route::get('/clearPlayers', 'App\Http\Controllers\PlayerController@clearPlayers');

//DB SETUP
Route::get('/insertGames', 'App\Http\Controllers\GameController@insertGames');
Route::get('/clearGames', 'App\Http\Controllers\GameController@clearGames');

//ADDING NEW PLAYER
Route::get('/newPlayer', 'App\Http\Controllers\PlayerController@newPlayer');
Route::get('/insertNewPlayer', 'App\Http\Controllers\PlayerController@insertNewPlayer')->name('insertNewPlayer');

//EDIT PLAYER DETAILS
Route::get('/editPlayerDetails/{id}', 'App\Http\Controllers\PlayerController@showPlayerDetails');
Route::get('/updatePlayerDetails', 'App\Http\Controllers\PlayerController@updatePlayerDetails')->name('updatePlayerDetails');

//FINISHING/ADDING NEW GAME
Route::get('/newGame', 'App\Http\Controllers\GameController@newGame');
Route::get('/insertNewGame', 'App\Http\Controllers\GameController@insertNewGame')->name('insertNewGame');

//STATS
Route::get('/playersProfile/{id}', 'App\Http\Controllers\GameController@playersProfile');
Route::get('/leaderboard', 'App\Http\Controllers\GameController@leaderboard');

Route::get('/', function () {
    return view('home');
});