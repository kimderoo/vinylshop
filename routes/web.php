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

/*front routes*/
Route::get('/', 'HomeController@index');
Route::get('/products', 'HomeController@products');
Route::get('/products/details/{id}', 'HomeController@product_details');
Route::get('/products/categories', 'HomeController@product_categories');
Route::get('/products/brands', 'HomeController@product_brands');
Route::get('/blog','HomeController@blog');
Route::get('/blog/post/{id}', 'HomeController@blog_post');
Route::get('/contact-us', 'HomeController@contact_us');
Route::get('/login', 'HomeController@login');
Route::get('/logout', 'HomeController@logout');
Route::get('/checkout', 'HomeController@checkout');
Route::get('/cart', 'HomeController@cart');
Route::post('/cart','HomeController@cart');
Route::get('/clear-cart', 'HomeController@clear_cart');
Route::get('/search/{query}','HomeController@search');



/*auth routes*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'DashboardController@index');



Route::group(['middleware'=>'auth','prefix' => 'admin'],function(){
    /*resource routes*/
    Route::resource('users','AdminUsersController');
    Route::resource('roles','RolesController');
    Route::resource('records','RecordsController');
    Route::resource('genres','GenresController');
});