<?php
Route::get('/location/list', 'LocationController@index')->name('location.list');
Route::get('/location/create', 'LocationController@create')->name('location.create');
Route::get('/location/show/{id}', 'LocationController@show')->name('location.show');
Route::post('/location/store', 'LocationController@store')->name('location.store');
Route::get('/location/edit/{id}', 'LocationController@edit')->name('location.edit');
Route::post('/location/update/{id}', 'LocationController@update')->name('location.update');


Route::get('/location/types/list', 'LocationController@indexTypesList')->name('location.types.list');
Route::get('/location/types/create', 'LocationController@addTypesList')->name('location.types.create');
Route::get('/location/types/edit/{id}', 'LocationController@editTypesList')->name('location.types.edit');
Route::get('/location/types/show/{id}', 'LocationController@showTypesList')->name('location.types.show');

/*** Routes for Buyer */
Route::get('/buyer/list', 'BuyerController@index')->name('buyer.list');
Route::get('/buyer/create', 'BuyerController@create')->name('buyer.create');
Route::post('/buyer/store', 'BuyerController@store')->name('buyer.create');
Route::get('/buyer/edit/{id}', 'BuyerController@edit')->name('buyer.edit');
Route::get('/buyer/show/{id}', 'BuyerController@show')->name('buyer.show');
