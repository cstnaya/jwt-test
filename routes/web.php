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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('authThermal')->group(function () {
    Route::get('thermal/dashboard', 'App\Http\Controllers\WebThermalController@dashboard');
    Route::get('thermal/detail', 'App\Http\Controllers\WebThermalController@detail');
    Route::post('thermal/logout', 'App\Http\Controllers\WebThermalController@logout');
});

Route::middleware('guestThermal')->group(function () {
    Route::get('thermal/login', 'App\Http\Controllers\WebThermalController@login');
    Route::post('thermal/login/post', 'App\Http\Controllers\WebThermalController@post_login');
});

Route::get('thermal/login/{token}', 'App\Http\Controllers\WebThermalController@login_wt_token');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');