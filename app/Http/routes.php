<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::match(['get', 'post'], '/', function () {
//    return view('main', ['flags' => []]);
//});

Route::match(['get', 'post'], '/', [
    'as' => 'main',
    'uses' => 'MainController@index'
]);

Route::post('/dial', [
    'as' => 'dial',
    'uses' => 'DialController@index'
]);

