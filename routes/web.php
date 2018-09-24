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


Route::get('/', function () {
    return view('index');
});
*/
Route::match(['get', 'post'],'/', array('uses' => 'HomeController@index'));
Route::match(['get', 'post'],'/search', array('uses' => 'HomeController@search'));
Route::match(['get', 'post'],'/products/{id?}/{page?}', array('uses' => 'HomeController@products'));
Route::match(['get', 'post'],'/details/{id?}/{page?}', array('uses' => 'HomeController@details'));
