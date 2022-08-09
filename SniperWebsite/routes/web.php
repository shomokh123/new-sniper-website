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

Route::get('/Aboutus', function () {
    return view('AboutUs');
});
Route::get('/journey', function () {
    return view('SniperJourney');
});




Route::get('/getStarted', function () {
    return view('getStarted');
});