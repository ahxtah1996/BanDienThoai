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

Route::resource('/product', 'ProductController');

Route::get('collections/{id}', 'ProductController@collections');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], () => {
    Route::get('/', 'AdminHomeController@index')->name('admin-home');
    Route::resource('product', 'ProductController');
    Route::get('getCategoryChild', 'ProductController@getCategoryChild')->name('getCategoryChild');
    Route::get('getCategoryType', 'Product`Controller@getCategoryType')->name('getCategoryType');
});
