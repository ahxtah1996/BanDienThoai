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

// Route::get('/w', function () {
//     return view('welcome');
// });
Route::resource('/', 'HomeController');

// restFul category
Route::resource('category', 'CategoryController');

Route::get('contact', 'CategoryController@contact');
Route::get('service', 'CategoryController@service');
Route::get('introduce', 'CategoryController@introduce');
Route::get('guarantee', 'CategoryController@guarantee');

Route::resource('product', 'ProductController');

Route::get('collections/{id}', 'ProductController@collections');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminHomeController@index')->name('admin-home');

Route::resource('/admin/product', 'Admin\ProductController');
Route::get('getCategoryChild', 'Admin\ProductController@getCategoryChild')->name('getCategoryChild');
Route::get('getCategoryType', 'Admin\ProductController@getCategoryType')->name('getCategoryType');
>>>>>>> b779fa9b2d8fa92795d7818bd31381a1dbe4aefc
