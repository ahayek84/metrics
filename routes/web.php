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
Route::get('/', 'SiteController@home');
Route::post('/', 'SiteController@home');

Route::get('/bar_chart/{fromdate}/{class}', 'QueriesController@bar_chart');

