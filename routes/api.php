<?php

use App\Party;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('party', 'PartyController@index');
Route::get('party/{usersId}', 'PartyController@showWithUserId');

Route::get('classes', 'ClassesController@index');

Route::get('characters', 'CharactersController@index');
Route::get('characters/{usersId}', 'CharactersController@showWithUserId');

