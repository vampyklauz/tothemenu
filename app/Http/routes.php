<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::any('page/{page}', 'PageController@index');

Route::any('restaurant/{id}', 'RestaurantController@index');

Route::any('about', 'PageController@about');
Route::any('contact', 'PageController@contact');


Route::get('login','LoginController@index');



Route::auth();

Route::get('/home', 'HomeController@index');

Route::any('admin', 'AdminController@index');
