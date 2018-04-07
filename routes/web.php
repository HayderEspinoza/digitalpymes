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

Route::get('/', function () { return view('web.inicio'); });
Route::get('/servicio', function () { return view('web.servicio'); });
Route::get('/busqueda', function () { return view('web.servicios'); });
Auth::routes();
Route::get('home', 'HomeController@index')->name('home');
Route::resource('lenders', 'LenderController');
Route::resource('services', 'ServiceController');
Route::resource('departaments', 'DepartamentController');
Route::resource('cities', 'CityController');
Route::resource('categories', 'CategoryController');
Route::resource('users', 'UserController');
