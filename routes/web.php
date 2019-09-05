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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/','ProductController@index')->name('/');
Route::get('best_offer','DayOfferController@index')->name('best_offer');
Route::get('categories/{id}','CategoryController@show')->name('categories');
Route::get('product/{id}','ProductController@show')->name('product');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
