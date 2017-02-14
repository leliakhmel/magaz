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



Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('home', 'HomeController@postindex');




Route::get('/home', 'HomeController@getIndex'); 
Route::get('/home/delete/{id}', 'HomeController@getDelete'); 

Route::get('/home/edit/{id}', 'HomeController@getEdit'); 
Route::post('/home/edit/{id}', 'HomeController@postEdit'); 






Route::get('/', 'BaseController@getIndex');    //всегда последний с id
Route::get('/catalog', 'CatalogController@getIndex'); 
Route::get('/{id}', 'BaseController@getStatic');


//всегда в конце файлы
//default route
