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


Route::namespace('\App\Http\controllers')->group(function(){
    Route::get('/','PageController@index')->name('index');
    Route::get('/publications','PageController@blog')->name('blog');
    Route::get('/blogdetails','PageController@blogdetails')->name('blogdetails');
    Route::get('/test', 'TestController@index')->name('TestController');
});