<?php

/*
|--------------------------------------------------------------------------
| Web Routesfront_end.master
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front_end.master');

});
Route::get('underconstruct', ['uses' => 'UsersController@under']);
