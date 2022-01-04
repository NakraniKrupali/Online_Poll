<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\pollController;


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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::view('/admin/login', 'login');
Route::view('/insertpoll', 'addPolldata');
Route::get('/playPoll', [pollController::class,'playpoll']);

Route::post('/adminlogin', [adminController::class,'adminlogin'])->name('login');
Route::post('/addpoll', [pollController::class,'insertpoll'])->name('poll');
Route::post('/submitpoll', [pollController::class,'submitpoll'])->name('play');

Route::get('/logout', [adminController::class,'logout']);

Route::get('/status/{id}',[pollController::class,'status']);
Route::get('/result/{id}',[pollController::class,'result']);

Route::get('/polls', [pollController::class,'displayPolls']);
