<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('index');
});

//Route Kelengkapan
Route::get('/kelengkapan', 'AmenityController@index');
Route::get('/kelengkapan/create', 'AmenityController@create');
Route::post('/kelengkapan/store', 'AmenityController@store');
Route::get('/kelengkapan/{id}', 'AmenityController@edit');
Route::patch('/kelengkapan/{id}', 'AmenityController@update');
Route::get('/kelengkapan/delete/{id}', 'AmenityController@destroy');

// Route Fasilitas
Route::get('/fasilitas', 'FacilityController@index');
Route::get('/fasilitas/create', 'FacilityController@create');
Route::post('/fasilitas/store', 'FacilityController@store');
Route::get('/fasilitas/{id}', 'FacilityController@edit');
Route::patch('/fasilitas/{id}', 'FacilityController@update');
Route::get('/fasilitas/delete/{id}', 'FacilityController@destroy');

//Route Unit
Route::get('/unit', 'UnitController@index');
Route::get('/unit/create', 'UnitController@create');
Route::get('/unit/{id}', 'UnitController@show');
Route::post('/unit/store', 'UnitController@store');
Route::get('/unit/{id}/edit', 'UnitController@edit');
Route::patch('/unit/{id}', 'UnitController@update');
Route::get('/unit/delete/{id}', 'UnitController@destroy');
Route::get('/unit/main/{main}', 'UnitController@main');
// Route::get('/unit/store/{building}/{nama}/{deskripsi}/{jual}/{sewa}/{cicil}/{diskon}/{path}/{amenity}', 'UnitController@store');

//Route Project
Route::get('/project', 'ProjectController@index');
Route::get('/project/create', 'ProjectController@create');
Route::get('/project/{id}', 'ProjectController@show');
Route::post('/project/store', 'ProjectController@store');
Route::get('/project/{id}/edit', 'ProjectController@edit');
Route::patch('/project/{id}', 'ProjectController@update');
Route::get('/project/delete/{id}', 'ProjectController@destroy');

//Route Building
Route::get('/building', 'BuildingController@index');
Route::get('/building/create', 'BuildingController@create');
Route::get('/building/{id}', 'BuildingController@show');
Route::post('/building/store', 'BuildingController@store');
Route::get('/building/{id}/edit', 'BuildingController@edit');
Route::patch('/building/{id}', 'BuildingController@update');
Route::get('/building/delete/{id}', 'BuildingController@destroy');

//Route View
Route::get('/view', 'ViewController@index');
Route::get('/view/{id}', 'ViewController@show');
Route::get('/view/360/{id}', 'ViewController@tiga');

