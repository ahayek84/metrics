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


Route::get('/summary', 'SiteController@summary');
Route::get('/{fromdate?}/{todate?}', 'SiteController@home');
Route::post('/{fromdate?}/{todate?}', 'SiteController@home');
