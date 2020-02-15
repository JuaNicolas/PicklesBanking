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
Route::get('dashboard/services', 'ServiceController@index')->name('service.index');
Route::get('/forms/create', 'ServiceController@formCreate')->name('service.formCreate');
Route::get('/forms/pay', 'ServiceController@formPay')->name('service.formPay');
Route::post('dashboard/services/pay', 'ServiceController@pay')->name('service.pay');
Route::post('dashboard/services/store', 'ServiceController@store')->name('service.store');

//* Investments
Route::get('dashboard/investments', 'InvestmentController@index');
Route::get('dashboard/investment/buy/{id}', 'InvestmentController@buy')->name('investment.buy');
Route::get('dashboard/investment/sell/{id}', 'InvestmentController@sell')->name('investment.sell');


//* Movements
Route::get('dashboard/balance', 'BalanceController@index');
