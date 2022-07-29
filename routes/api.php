<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\KlasController;
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

Route::get('kelas', [KlasController::class,'index']);
Route::post('kelas/store', [KlasController::class,'store']);
Route::get('kelas/show/{id}', [KlasController::class,'show']);
Route::post('kelas/update/{id}', [KlasController::class,'update']);
Route::get('kelas/destroy/{id}', [KlasController::class,'destroy']);