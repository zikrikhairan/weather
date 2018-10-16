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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@index');
Route::get('/location/{keyword}', 'HomeController@location');
Route::get('/location/{latitude}/{longitude}', 'HomeController@location_by_lat_long');
Route::get('/weather/{id}', 'HomeController@weather');
Route::get('/save/{city}', 'HomeController@save_city');