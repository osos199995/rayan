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
Route::get('/sortdown','ProductController@sortPriceDown')->name('/sortdown');
Route::get('/sortup','ProductController@sortPriceUp')->name('/sortup');
Route::get('best_offer','DayOfferController@index')->name('best_offer');
Route::get('best_offer_details/{id}','DayOfferController@show')->name('best_offer_details');
Route::get('categories/{id}','CategoryController@show')->name('categories');
Route::get('product/{id}','ProductController@show')->name('product');
Route::get('dayoffer_details','DayOfferController@dayoffershow')->name('dayoffer_details');
Route::get('/filter','FilterController@generalFilter');
Route::get('/search','SearchController@search');
Route::delete('/unsaved/{id}','SavedController@destroy')->name('unsaved');
Route::post('/saved','SavedController@store');
Route::post('/mail','MailPost@store');


Route::get('sailpolicy','HelpController@sailPolicy')->name('sailpolicy');
Route::get('buypolicy','HelpController@buyPolicy')->name('buypolicy');
Route::get('faq','HelpController@faq')->name('faq');
Route::get('join_us','HelpController@join')->name('join_us');
Route::get('conditions','HelpController@conditions')->name('conditions');
Route::get('privacy','HelpController@privacyPolicy')->name('privacy');
Route::get('help_center','HelpController@HelpCenter')->name('help_center');
Route::get('how_buy','HelpController@howBuy')->name('how_buy');
Route::get('policies','HelpController@Policy')->name('policies');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
