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

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('projets', 'ProjetController@index');

Route::get('projets/create', 'ProjetController@create');

Route::post('projets', 'ProjetController@store');

Route::get('projets/{id}/edit', 'ProjetController@edit');

Route::put('projets/{id}','ProjetController@update');

Route::delete('projets/{id}', 'ProjetController@destroy');


Route::get('photo','FormController@create');
Route::post('photo','FormController@store');





