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

Route::get('/', 'PagesController@index' )->name('index');
Route::get('/contact', 'PagesController@contact' )->name('contact');
Route::get('/products', 'PagesController@products' )->name('products');
Route::get('/brands', 'PagesController@brands' )->name('brands');
Route::get('/product/brand/{id}', 'PagesController@brand' )->name('brand');
Route::get('/product/show/{id}', 'PagesController@productshow' )->name('product.show');
Route::get('/product/category/{id}', 'PagesController@productcategory' )->name('product.category');
Route::post('/product/search', 'PagesController@productsearch' )->name('product.search');



// user route
Route::get('/token/{token}', 'VerificationController@verify' )->name('user.verification');




Route::group(['prefix'=>'admin'],function(){
  Route::get('/', 'AdminPagesController@index' )->name('admin.index');
  // product route
  Route::get('/product/create', 'AdminPagesController@create' )->name('admin.product.create');
  Route::post('/product/store', 'AdminPagesController@store' )->name('admin.product.store');
  Route::get('/product/manage', 'AdminPagesController@manage_products' )->name('admin.product.manage');
  Route::get('/product/edit/{id}', 'AdminPagesController@edit_product' )->name('admin.product.edit');
  Route::post('/product/update/{id}', 'AdminPagesController@update_product' )->name('admin.product.update');
  Route::post('/product/delete/{id}', 'AdminPagesController@delete_product' )->name('admin.product.delete');
  // category route
  Route::get('/category/create', 'CategoryController@create' )->name('admin.category.create');
  Route::post('/category/store', 'CategoryController@store' )->name('admin.category.store');
  Route::get('/category/manage', 'CategoryController@manage_categories' )->name('admin.category.manage');
  Route::get('/category/edit/{id}', 'CategoryController@edit_category' )->name('admin.category.edit');
  Route::post('/category/update/{id}', 'CategoryController@update_category' )->name('admin.category.update');
  Route::post('/category/delete/{id}', 'CategoryController@delete_category' )->name('admin.category.delete');

  // brand route
  Route::get('/brand/create', 'BrandController@create' )->name('admin.brand.create');
  Route::post('/brand/store', 'BrandController@store' )->name('admin.brand.store');
  Route::get('/brand/manage', 'BrandController@manage_brands' )->name('admin.brand.manage');
  Route::get('/brand/edit/{id}', 'BrandController@edit_brand' )->name('admin.brand.edit');
  Route::post('/brand/update/{id}', 'BrandController@update_brand' )->name('admin.brand.update');
  Route::post('/brand/delete/{id}', 'BrandController@delete_brand' )->name('admin.brand.delete');


  // division route
  Route::get('/division/create', 'DivisionController@create' )->name('admin.division.create');
  Route::post('/division/store', 'DivisionController@store' )->name('admin.division.store');
  Route::get('/division/manage', 'DivisionController@manage_divisions' )->name('admin.division.manage');
  Route::get('/division/edit/{id}', 'DivisionController@edit_division' )->name('admin.division.edit');
  Route::post('/division/update/{id}', 'DivisionController@update_division' )->name('admin.division.update');
  Route::post('/division/delete/{id}', 'DivisionController@delete_division' )->name('admin.division.delete');

  // district route
  Route::get('/district/create', 'DistrictController@create' )->name('admin.district.create');
  Route::post('/district/store', 'DistrictController@store' )->name('admin.district.store');
  Route::get('/district/manage', 'DistrictController@manage_districts' )->name('admin.district.manage');
  Route::get('/district/edit/{id}', 'DistrictController@edit_district' )->name('admin.district.edit');
  Route::post('/district/update/{id}', 'DistrictController@update_district' )->name('admin.district.update');
  Route::post('/district/delete/{id}', 'DistrictController@delete_district' )->name('admin.district.delete');



});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');












//finish
