<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/jemaat', 'JemaatController@index')->name('home');

Route::group(['prefix'=>'jemaats','as'=>'jemaats.'], function(){
    Route::get('', ['as' => 'index', 'uses' => 'JemaatController@index']);
    Route::post('', ['as' => 'store', 'uses' => 'JemaatController@store']);
    Route::get('/create', ['as' => 'create', 'uses' => 'JemaatController@create']);
    Route::get('/{jemaat}', ['as' => 'show', 'uses' => 'JemaatController@show']);
    Route::put('/{jemaat}', ['as' => 'update', 'uses' => 'JemaatController@update']);
    Route::delete('/{jemaat}', ['as' => 'destroy', 'uses' => 'JemaatController@destroy']);
    Route::get('/{jemaat}/edit', ['as' => 'edit', 'uses' => 'JemaatController@edit']);
});

Route::group(['prefix'=>'sidi','as'=>'sidi.'], function(){
    Route::get('', ['as' => 'index', 'uses' => 'SidiController@index']);
    Route::post('', ['as' => 'store', 'uses' => 'SidiController@store']);
    Route::get('/create', ['as' => 'create', 'uses' => 'SidiController@create']);
    Route::get('/{sidi}', ['as' => 'show', 'uses' => 'SidiController@show']);
    Route::put('/{sidi}', ['as' => 'update', 'uses' => 'SidiController@update']);
    Route::delete('/{sidi}', ['as' => 'destroy', 'uses' => 'SidiController@destroy']);
    Route::get('/{sidi}/edit', ['as' => 'edit', 'uses' => 'SidiController@edit']);
});

Route::group(['prefix'=>'pernikahan','as'=>'pernikahan.'], function(){
    Route::get('', ['as' => 'index', 'uses' => 'JemaatPernikahanController@index']);
    Route::post('', ['as' => 'store', 'uses' => 'JemaatPernikahanController@store']);
    Route::get('/create', ['as' => 'create', 'uses' => 'JemaatPernikahanController@create']);
    Route::get('/{pernikahan}', ['as' => 'show', 'uses' => 'JemaatPernikahanController@show']);
    Route::put('/{pernikahan}', ['as' => 'update', 'uses' => 'JemaatPernikahanController@update']);
    Route::delete('/{pernikahan}', ['as' => 'destroy', 'uses' => 'JemaatPernikahanController@destroy']);
    Route::get('/{pernikahan}/edit', ['as' => 'edit', 'uses' => 'JemaatPernikahanController@edit']);
});