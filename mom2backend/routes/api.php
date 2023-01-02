<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//inkludera rätt fil
use App\Http\Controllers\SnowController;

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
/*Routing för att styra in i controllern som i sin tur tar hand om anropet*/
Route::resource('snowboard', SnowController::class); 


/* Grundrouting för api, långa skrivstättet
Route::get("snowboard", function() {
    return response()->json([
        'message' => 'GET mottaget' ]);
});

Route::post("snowboard", function() {
    return response()->json([
        'message' => 'POST mottaget' ]);
}); */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
