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

//* Views
Route::view('/', 'welcome');

//* Services
Route::get('dashboard/services', 'ServiceController@index');

//* Investments
Route::get('dashboard/investments', 'InvestmentController@index');

//* Movements
Route::get('dashboard/balance', 'BalanceController@index');
