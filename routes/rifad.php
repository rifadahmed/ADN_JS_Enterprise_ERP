<?php

use App\Division;
use App\Location;
use App\LocationType;

// Route for Location
Route::get('/location/list', 'LocationController@index')->name('location.list');
Route::get('/location/create', 'LocationController@create')->name('location.create');
Route::get('/location/show/{id}', 'LocationController@show')->name('location.show');
Route::post('/location/store', 'LocationController@store')->name('location.store');
Route::get('/location/edit/{id}', 'LocationController@edit')->name('location.edit');
Route::post('/location/update/{id}', 'LocationController@update')->name('location.update');

// Route for Division district and upazila
Route::get('/location/division/create', 'LocationController@create_division')->name('location.division.create');
Route::post('/location/division/store', 'LocationController@store_division')->name('location.division.store');

Route::get('/location/district/create', 'LocationController@create_district')->name('location.district.create');
Route::post('/location/district/store', 'LocationController@store_district')->name('location.district.store');

Route::get('/location/upazila/create', 'LocationController@create_upazila')->name('location.upazila.create');
Route::post('/location/upazila/store', 'LocationController@store_upazila')->name('location.upazila.store');


Route::get('/location/types/list', 'LocationController@indexTypesList')->name('location.types.list');
Route::get('/location/types/create', 'LocationController@addTypesList')->name('location.types.create');
Route::post('/location/types/store', 'LocationController@storeTypesList')->name('location.types.store');
Route::get('/location/types/edit/{id}', 'LocationController@editTypesList')->name('location.types.edit');
Route::post('/location/types/update/{id}', 'LocationController@updateTypesList')->name('location.types.update');
Route::get('/location/types/show/{id}', 'LocationController@showTypesList')->name('location.types.show');

/*** Routes for Buyer */
Route::get('/buyer/list', 'BuyerController@index')->name('buyer.list');
Route::get('/buyer/create', 'BuyerController@create')->name('buyer.create');
Route::post('/buyer/store', 'BuyerController@store')->name('buyer.store');
Route::get('/buyer/edit/{id}', 'BuyerController@edit')->name('buyer.edit');
Route::post('/buyer/update/{id}', 'BuyerController@update')->name('buyer.update');
Route::get('/buyer/show/{id}', 'BuyerController@show')->name('buyer.show');

 Route::post('/district/ajaxcall', 'BuyerController@districtAjaxcall')->name('district.ajaxcall');
 Route::post('/upazila/ajaxcall', 'BuyerController@upazilaAjaxcall')->name('upazila.ajaxcall');


Route::get('/buyer/type/list', 'BuyerController@indexBuyerType')->name('buyer.type.list');
Route::get('/buyer/type/create', 'BuyerController@createBuyerType')->name('buyer.type.create');
Route::post('/buyer/type/store', 'BuyerController@storeBuyerType')->name('buyer.type.store');
Route::get('/buyer/type/edit/{id}', 'BuyerController@editBuyerType')->name('buyer.type.edit');
Route::post('/buyer/type/update/{id}', 'BuyerController@updateBuyerType')->name('buyer.type.update');
Route::get('/buyer/type/show/{id}', 'BuyerController@showBuyerType')->name('buyer.type.show');

/*** Routes for Warehouse */
Route::get('/warehouse/list', 'WarehouseController@index')->name('warehouse.list');
Route::get('/warehouse/create', 'WarehouseController@create')->name('warehouse.create');
Route::post('/warehouse/store', 'WarehouseController@store')->name('warehouse.store');
Route::get('/warehouse/edit/{id}', 'WarehouseController@edit')->name('warehouse.edit');
Route::post('/warehouse/update/{id}', 'WarehouseController@update')->name('warehouse.update');
Route::get('/warehouse/show/{id}', 'WarehouseController@show')->name('warehouse.show');

/*** Routes for Sub Category */
Route::get('/subcategory/list', 'SubCategoryController@index')->name('subcategory.list');
Route::get('/subcategory/create', 'SubCategoryController@create')->name('subcategory.create');
Route::post('/subcategory/store', 'SubCategoryController@store')->name('subcategory.store');
Route::get('/subcategory/edit/{id}', 'SubCategoryController@edit')->name('subcategory.edit');
Route::post('/subcategory/update/{id}', 'SubCategoryController@update')->name('subcategory.update');
Route::get('/subcategory/show/{id}', 'SubCategoryController@show')->name('subcategory.show');

/*** Routes for Brand */
Route::get('/brand/list', 'BrandController@index')->name('brand.list');
Route::get('/brand/create', 'BrandController@create')->name('brand.create');
Route::post('/brand/store', 'BrandController@store')->name('brand.store');
Route::get('/brand/edit/{id}', 'BrandController@edit')->name('brand.edit');
Route::post('/brand/update/{id}', 'BrandController@update')->name('brand.update');
Route::get('/brand/show/{id}', 'BrandController@show')->name('brand.show');

/*** Routes for Product */
Route::get('/product/list', 'ProductController@index')->name('product.list');
Route::get('/product/create', 'ProductController@create')->name('product.create');
Route::post('/product/store', 'ProductController@store')->name('product.store');
Route::get('/product/edit/{id}', 'ProductController@edit')->name('product.edit');
Route::post('/product/update/{id}', 'ProductController@update')->name('product.update');
Route::get('/product/show/{id}', 'ProductController@show')->name('product.show');

/*** Routes for Purchase */
Route::get('/purchase/list', 'PurchaseController@index')->name('purchase.list');
Route::get('/purchase/create', 'PurchaseController@create')->name('purchase.create');
Route::post('/purchase/store', 'PurchaseController@store')->name('purchase.store');
Route::get('/purchase/edit/{id}', 'PurchaseController@edit')->name('purchase.edit');
Route::post('/purchase/update/{id}', 'PurchaseController@update')->name('purchase.update');
Route::get('/purchase/show/{id}', 'PurchaseController@show')->name('purchase.show');

/*** Routes for Sale */
Route::get('/sale/list', 'SaleController@index')->name('sale.list');
Route::get('/sale/create', 'SaleController@create')->name('sale.create');
Route::post('/sale/store', 'SaleController@store')->name('sale.store');
Route::get('/sale/edit/{id}', 'SaleController@edit')->name('sale.edit');
Route::post('/sale/update/{id}', 'SaleController@update')->name('sale.update');
Route::get('/sale/show/{id}', 'SaleController@show')->name('sale.show');

/*** Routes for User */
Route::get('/user/list', 'UserController@index')->name('user.list');
Route::get('/user/create', 'UserController@create')->name('user.create');
Route::post('/user/store', 'UserController@store')->name('user.store');
Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
Route::post('/user/update/{id}', 'UserController@update')->name('user.update');
Route::get('/user/show/{id}', 'UserController@show')->name('user.show');

/*** Routes for Supplier */
Route::get('/supplier/list', 'SupplierController@index')->name('supplier.list');
Route::get('/supplier/create', 'SupplierController@create')->name('supplier.create');
Route::post('/supplier/store', 'SupplierController@store')->name('supplier.store');
Route::get('/supplier/edit/{id}', 'SupplierController@edit')->name('supplier.edit');
Route::post('/supplier/update/{id}', 'SupplierController@update')->name('supplier.update');
Route::get('/supplier/show/{id}', 'SupplierController@show')->name('supplier.show');


