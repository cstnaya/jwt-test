<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
 *
 * -----------------------------------
 *  Sub Routes
 * -----------------------------------
 * 
 *  Here is where you can register sub routes for your application. These
 *  routes are loaded by the RouteServiceProvider within a group which
 *  contains the "sub" middleware group. Now create something great!
 * 
 */

Route::get('/', function () {
    return 'sub routes! Hello world!';
});

Route::post('login', 'App\Http\Controllers\sub\LoginController@login');