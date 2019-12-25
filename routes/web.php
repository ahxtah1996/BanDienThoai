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
Route::resource('/cart', 'CartController');
Route::get('/scart/ajax', 'CartController@ajax');
Route::get('product-search', 'ProductController@search');
Route::resource('/product', 'ProductController');
Route::get('collections/{id}', 'ProductController@collections');
Route::resource('payment', 'PaymentController');

Auth::routes();

Route::group(['namespace' => 'Admin', 'prefix' => 'manager', 'middleware' => 'admin'], function() {
    Route::get('/', 'AdminHomeController@index')->name('admin-home');
    Route::resource('mn-product', 'ProductController');
    Route::resource('mn-category', 'CategoryController');
    Route::get('mn-categoryChild-index', 'CategoryController@categoryChild')->name('mn-categoryChild-index');
    Route::get('mn-categoryDetail-index', 'CategoryController@categoryDetail')->name('mn-categoryDetail-index');
    Route::get('getCategoryChild', 'ProductController@getCategoryChild')->name('getCategoryChild');
    Route::get('getCategoryType', 'ProductController@getCategoryType')->name('getCategoryType');
    Route::resource('mn-store', 'StoreController');
    Route::resource('mn-color', 'ColorController');
});
