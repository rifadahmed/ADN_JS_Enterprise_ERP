<?php
Route::get('/location/list', 'LocationController@index')->name('location.list');
Route::get('/location/create', 'LocationController@create')->name('location.create');
Route::post('/location/store', 'LocationController@store')->name('location.store');
Route::get('/location/edit/{id}', 'LocationController@edit')->name('location.edit');
Route::post('/location/update/{id}', 'LocationController@update')->name('location.update');

Route::get('/location/types/list', 'LocationController@showTypesList')->name('location.types.list');
Route::get('/location/types/list', 'LocationController@showTypesList')->name('location.types.list');

