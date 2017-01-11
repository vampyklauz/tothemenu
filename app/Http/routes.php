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

Route::any('about', 'PageController@about');
Route::any('contact', 'PageController@contact');


Route::get('login','LoginController@index');



Route::auth();

Route::get('/home', 'HomeController@index');


// ADMIN Controller
Route::any('admin', 'AdminController@index');
Route::any('admin/locations/{state}','AdminController@locations');

Route::any('admin/cuisine','AdminController@cuisine');

// Admin Functions
Route::any('admin/addCounty','AdminController@addCounty');
Route::any('admin/editCounty','AdminController@editCounty');
Route::any('admin/removeCounty','AdminController@removeCounty');

// TOWN
Route::any('admin/towns','TownController@index');
Route::any('admin/addTown','TownController@addTown');
Route::any('admin/editTown','TownController@editTown');
Route::any('admin/removeTown','TownController@removeTown');

// TOWN
Route::any('admin/cuisines','CuisineController@index');
Route::any('admin/addCuisine','CuisineController@addCuisine');
Route::any('admin/editCuisine','CuisineController@editCuisine');
Route::any('admin/removeCuisine','CuisineController@removeCuisine');

// Register Restaurant
Route::any('restaurant/{id}', 'RestaurantController@index');
Route::any('register/restaurant','RestaurantController@show');
Route::any('register/addRestaurant','RestaurantController@addRestaurant');
Route::any('register/editRestaurant','RestaurantController@editRestaurant');
Route::any('register/removeRestaurant','RestaurantController@removeRestaurant');
Route::any('mypage', 'PageController@myPage');
