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

Route::get('/', function () {
    return view('layouts.dashboard');
});
<<<<<<< HEAD

// Route::get('locations/add', ['as'=>'locations.add','uses'=>'LocationsController@addLocation']);
=======
@include ('rifad.php');
>>>>>>> c4f1836c135f37180cf61c361e54d1e7225f1b6e
