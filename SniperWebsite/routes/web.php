<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\journeyController;
use App\Http\Controllers\GeneralFormController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\RequestController;
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


//Route::get('/viewR','App\Http\Controllers\RequestController@apply');



Route::get('/getStarted','App\Http\Controllers\GeneralFormController@create');



Route::post('/store', 'App\Http\Controllers\GeneralFormController@store');


Route::get('/message', function () {
    return view('formMessage');
});




Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.admin.home')->name('home');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
    });

});

Route::get('/request',[AdminController::class,'requests']);

Route::get('/viewR/{id}', [RequestController::class, 'detail']);

//delete request
Route::get('destroy/{id}', 'App\Http\Controllers\GeneralFormController@destroy');


//excel
Route::get('/export','App\Http\Controllers\GeneralFormController@export');
