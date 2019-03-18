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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', 'shirtsController@index')->name('index');

Route::get('/shirts', 'shirtsController@shirts')->name('shirts');

Route::get('/shirt', function () {
    return view('shirt');
})->name('shirt');


Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::resource('admin/categories', 'CategoriesController')->middleware('auth');


Route::resource('/admin', 'ProductsController')->middleware('auth');

Route::resource('/cart', 'CartController');

Route::resource('/address', 'AddressController');

Route::get('/shipping-info','shippingInfoController@index')->name('shipping-info');

Route::get('/home', 'HomeController@index')->name('home');
