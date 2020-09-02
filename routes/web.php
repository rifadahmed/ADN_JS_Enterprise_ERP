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

<<<<<<< HEAD
Route::get('/', function () {
    return view('layouts.dashboard');
});
=======
/*Route::get('/', function () {
    return view('dashboard.dashboard');
});*/

Route::get('/','DashboardController@index')->name('dashboard');

>>>>>>> c13164b71e69921e14217c0c4c465c34d50c0167
@include ('rifad.php');
