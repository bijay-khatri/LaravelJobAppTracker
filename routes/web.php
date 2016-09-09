<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('public.landing');
});

Auth::routes();

Route::post('response/add/{jobApplication}','ResponseController@store')->name('response.add');

Route::get('app/view/{id}','HomeController@viewSingle');
Route::get('app/edit/{jobApplication}','HomeController@edit');
Route::get('app/view/','HomeController@view');
Route::get('app','HomeController@start');
Route::get('home', 'HomeController@index');
Route::get('contact','HomeController@contact');
Route::get('about','HomeController@about');
// Route::post('app/store/{id}','HomeController@store')->name('app.update');
Route::post('app/store/{jobApplication?}','HomeController@store')->name('app.store');
