<?php

use Illuminate\Support\Facades\Route;

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
//Homepage
Route::view('/', 'home');

//Market routes
Route::get('/markets/', 'MarketController@index'); //View all markets

//Product routes
Route::get('/markets/view/{id}', 'ProductController@index'); //View products at a market
Route::get('/AddToCart', 'ProductController@AddToCart')->name('product.AddToCart'); //Add to the cart
Route::get('/cart',      'ProductController@cart'     )->name('product.cart');