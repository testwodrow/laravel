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

\Illuminate\Support\Facades\Route::get('/', function () {
    return view('welcome');
});
\Illuminate\Support\Facades\Auth::routes();
\Illuminate\Support\Facades\Route::get('/home', 'HomeController@index')->name('home');
\Illuminate\Support\Facades\Route::get('/test', 'TestController@index')->name('test');
