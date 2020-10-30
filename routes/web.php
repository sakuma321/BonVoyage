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

// トップ画面を表示
Route::get('/', function () {
    return view('top');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin', "middleware" => "auth"], function(){
    // 投稿フォームページ
    Route::post('countries/create','Admin\CountriesController@create');
    Route::get('countries/create','Admin\CountriesController@add');

    Route::get('travel', 'Admin\CountriesController@index');

    Route::get('practice','PracticeController@add');
   
    Route::get('cities/create','CitiesController@create');
    Route::post('cities/create','CitiesController@store');
    Route::get('cities','CitiesController@index');

});

Route::get("country/{id}","Admin\CountriesController@show");

