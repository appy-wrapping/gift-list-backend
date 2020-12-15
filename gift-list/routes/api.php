<?php

use App\Http\Controllers\Gifts;
use App\Models\GiftModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Friend;
use App\Http\Controllers\Friends;

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

Route::get('gifts', [Gifts::class, "indexAll"]); // return all gifts
Route::post('friends/{friend}/gifts', [Gifts::class, "store"]); // add a new gift to a specific friend
Route::delete('gifts/{gift}', [Gifts::class, "destroy"]); // remove a gift
Route::patch('gifts/{gift}', [Gifts::class, "update"]); // update a gift

Route::get('friends', [Friends::class, "index"]); // get all friends
Route::get('friends/{friend}', [Friends::class, "show"]); // show one friend TODO
Route::get('friends/{friend}/gifts', [Gifts::class, "index"]); // get all gifts for one friend TODO
Route::post('friends', [Friends::class, "store"]); // create a friend
Route::delete('friends/{friend}', [Friends::class, "destroy"]); // delete a friend
Route::patch('friends/{friend}', [Friends::class, "update"]); // modify a friend


// Route::get('owners/{owner}/animals', [AnimalsController::class, "index"]); // lists all the animals belonging to a specific owner