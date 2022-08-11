<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\journeyController;
use App\Http\Controllers\GeneralFormController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/



 
Route::get('/journey','App\Http\Controllers\journeyController@sniperj');

Route::get('/Aboutus','App\Http\Controllers\AboutusController@sniperA');

Route::get('/','App\Http\Controllers\HomeController@sniperH');

//Route::get('/services','App\Http\Controllers\ServiceController@sniperS');

//Route::get('/', 'App\Http\Controllers\ServiceController@sniperS')->name('sniperS');

Route::get('/getStarted','App\Http\Controllers\GeneralFormController@create');



Route::post('/store', 'App\Http\Controllers\GeneralFormController@store');


//Route::post('formStore','App\Http\Controllers\GeneralFormController@store');

