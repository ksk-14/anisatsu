<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AnnictController;
use App\Http\Controllers\API\SelfController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/example', 'AnnictController@getIndex');
// Route::get('/example', 'App\Http\Controllers\API\AnnictController@getIndex');
Route::get('/getIndex', [AnnictController::class, 'getIndex']);
Route::get('/works/{id}', [AnnictController::class, 'getDetail']);
Route::get('/rooms/{workId}', [SelfController::class, 'getRooms']);
Route::get('/rooms/{workId}/{episodeId}', [SelfController::class, 'getRooms']);
Route::get('/room/{roomId}', [SelfController::class, 'getRoom']);