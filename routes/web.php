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
//Route::match(['get', 'post'],'/destroy/{id?}', array('uses' => 'CartController@destroy'));
//Route::match(['get', 'post'],'/cart', array('uses' => 'CartController@index'));
Route::match(['get', 'post'],'/checkout', array('uses' => 'CartController@checkout'));
Route::match(['get', 'post'],'/checkuser', array('uses' => 'AccountController@checkuser'));
Route::match(['get', 'post'],'/saveaddress', array('uses' => 'AccountController@saveaddress'));
Route::match(['get', 'post'],'/changeUser', array('uses' => 'CartController@changeUser'));
Route::match(['get', 'post'],'/orderPlace', array('uses' => 'CartController@orderPlace'));
Route::match(['get', 'post'],'/orderresponse/{id?}', array('uses' => 'CartController@orderresponse'));
Route::match(['get', 'post'],'/about', array('uses' => 'HomeController@about'));
Route::match(['get', 'post'],'/contact', array('uses' => 'HomeController@contact'));
Route::match(['get', 'post'],'/privacy_policy', array('uses' => 'HomeController@privacy_policy'));
Route::match(['get', 'post'],'/return_exchange', array('uses' => 'HomeController@return_exchange'));
Route::match(['get', 'post'],'/payment_policy', array('uses' => 'HomeController@payment_policy'));
Route::match(['get', 'post'],'/website_usage', array('uses' => 'HomeController@website_usage'));
Route::match(['get', 'post'],'/term_condition', array('uses' => 'HomeController@term_condition'));


Route::resource('cart', 'CartController');
