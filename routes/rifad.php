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
Route::get('/buyer/update/{id}', 'BuyerController@update')->name('buyer.update');
Route::get('/buyer/show/{id}', 'BuyerController@show')->name('buyer.show');

Route::get('/buyer/type/list', 'BuyerController@indexBuyerType')->name('buyer.type.list');
Route::get('/buyer/type/create', 'BuyerController@createBuyerType')->name('buyer.type.create');
Route::post('/buyer/type/store', 'BuyerController@storeBuyerType')->name('buyer.type.create');
Route::get('/buyer/type/edit/{id}', 'BuyerController@editBuyerType')->name('buyer.type.edit');
Route::get('/buyer/type/update/{id}', 'BuyerController@updateBuyerType')->name('buyer.type.update');
Route::get('/buyer/type/show/{id}', 'BuyerController@showBuyerType')->name('buyer.type.show');

/*** Routes for Warehouse */
Route::get('/warehouse/list', 'WarehouseController@index')->name('warehouse.list');
Route::get('/warehouse/create', 'WarehouseController@create')->name('warehouse.create');
Route::post('/warehouse/store', 'WarehouseController@store')->name('warehouse.create');
Route::get('/warehouse/edit/{id}', 'WarehouseController@edit')->name('warehouse.edit');
Route::get('/warehouse/update/{id}', 'WarehouseController@update')->name('warehouse.update');
Route::get('/warehouse/show/{id}', 'WarehouseController@show')->name('warehouse.show');
