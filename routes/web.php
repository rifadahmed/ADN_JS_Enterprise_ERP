<?php

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

/*Route::get('/', function () {
    return view('dashboard.dashboard');
});*/

Route::get('/','DashboardController@index')->name('dashboard');


@include ('rifad.php');
Route::get("/test",function(){
    return view('locations.index_1');
});

/*** Routes for Category */
Route::get('/category/list', 'CategoryController@index')->name('category.list');
Route::get('/category/create', 'CategoryController@create')->name('category.create');
Route::post('/category/store', 'CategoryController@store')->name('category.store');
Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
Route::post('/category/update/{id}', 'CategoryController@update')->name('category.update');
Route::get('/category/show/{id}', 'CategoryController@show')->name('category.show');
