<?php

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

use App\Http\Controllers\KelasController;
use App\Http\Controllers\KlasController;
use App\Http\Controllers\StudentController;
use App\Klas;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student',[StudentController::class,'index'])->name('student');

Route::get('/createdata',[StudentController::class,'createdata'])->name('createdata');

Route::post('/insertdata',[StudentController::class,'insertdata'])->name('insertdata');

Route::get('/showdata/{id}',[StudentController::class,'showdata'])->name('showdata');

Route::post('/updatedata/{id}',[StudentController::class,'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[StudentController::class,'delete'])->name('delete');

Route::get('/kelas',[KlasController::class,'index'])->name('kelas');