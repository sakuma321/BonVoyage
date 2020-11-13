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


Route::get('/home_search', 'HomeController@search')->name('home');


Route::group(['prefix' => 'admin', "middleware" => "auth"], function(){
    
    Route::get('travel', 'Admin\CountriesController@index');

    
    Route::group(['prefix'=> 'countries'], function(){

    //   国
        Route::post('create','Admin\CountriesController@create');
        Route::get('create','Admin\CountriesController@add');
    // 編集
        Route::get('edit','Admin\CountriesController@edit');
        Route::post('edit','Admin\CountriesController@update');
        Route::get('delete','Admin\CountriesController@delete');


    
    //   都市
        Route::get('{contry_id}/cities/create','CitiesController@create');
        Route::post('{contry_id}/cities/create','CitiesController@store');
        Route::get('{contry_id}/cities','CitiesController@index');
    });
    

});

Route::get("country/{id}","Admin\CountriesController@show");

Auth::routes();
