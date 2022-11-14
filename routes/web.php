<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GirlController;
use App\Http\Controllers\RainyController;
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
Route::resource('girls',GirlController::class);
Route::get('/rainy-login', function(){
    return view('templates.login');
});

Route::resource('rainy-day',RainyController::class);