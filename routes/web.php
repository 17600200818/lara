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


Route::resource('filters', 'FiltersController');
//Route::resource('filters', 'FiltersController')->except(['index', 'store']);
//
//Route::get('filters', 'FiltersController@index')->name('filters.index');
//Route::post('filters', 'FiltersController@post')->name('filters.store');
//Route::get('filters/create', 'FiltersController@create')->name('filters.create');
//Route::get('filters/{filter}', 'FiltersController@show')->name('filters.show');
//Route::patch('filters/{filter}', 'FiltersController@update')->name('filters.update');
//Route::delete('filters/{filter}', 'FiltersController@destroy')->name('filters.delete');
//Route::get('filters/{filter}/edit', 'FiltersController@edit')->name('filters.edit');


//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
