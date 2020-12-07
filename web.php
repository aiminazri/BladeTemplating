<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('about.hello');
});
Route::get('/hello/morehello', function () {
    return 'More Hello World';
});
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {

    return view('welcome');
});
*/



use App\Http\Controllers\bookController;

Route::get('/about', 'App\Http\Controllers\bookController@about');
Route::get('/list', 'App\Http\Controllers\bookController@list');
