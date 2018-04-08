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

Auth::routes();
Route::get('/', function () { return redirect()->route('lenders.index'); });
Route::get('/servicio', function () { return view('web.servicio'); });
Route::get('/busqueda', function () { return view('web.servicios'); });
Route::resource('lenders', 'LenderController');
Route::resource('services', 'ServiceController');
Route::resource('departaments', 'DepartamentController');
Route::resource('cities', 'CityController');
Route::resource('categories', 'CategoryController');
Route::get('users/password/{id}', 'UserController@password')->name('users.password');
Route::put('users/password/{id}', 'UserController@changePassword')->name('users.changePassword');
Route::resource('users', 'UserController');