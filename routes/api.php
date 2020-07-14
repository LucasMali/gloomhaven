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


/*
 * Party
 */
Route::get('v1/party', 'PartyController@index');
Route::get('v1/party/{usersId}', 'PartyController@showWithUserId');

/*
 * Classes
 */
Route::get('v1/classes', 'ClassesController@index');
Route::get('v1/classes/{id}', 'ClassesController@show');
Route::get('v1/classes/name/{name}', 'ClassesController@showByName');
Route::get('v1/classes/user/{userId}', 'ClassesController@showByUserId');

/*
 * Characters
 */
Route::get('v1/characters', 'CharactersController@index');
Route::get('v1/characters/{usersId}', 'CharactersController@showWithUserId');

/*
 * Achievements
 */
Route::get('v1/achievements', 'AchievementsController@index');
Route::get('v1/achievements/{id}', 'AchievementsController@show');
Route::get('v1/achievements/type/{type}', 'AchievementsController@showByType');
Route::get('v1/achievements/campaign/{id}/{type?}', 'AchievementsController@showByCampaignId');

