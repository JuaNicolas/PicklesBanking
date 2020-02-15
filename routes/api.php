<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//* API CRUD

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//* User
Route::get('/user/{id}', 'UserController@show');
Route::post('/user/{id}', 'UserController@store');
Route::delete('/user/{id}', 'UserController@delete');

//* Services
Route::post('/service/{id}', 'ServiceController@store');
Route::put('/service/{id}', 'ServiceController@update')->name('services.update');
Route::delete('/service/{id}', 'ServiceController@destroy')->name('services.destroy');

//* Investments
Route::get('/investment/{id}', 'InvestmentController@show');
Route::post('investment/buy/{id}', 'InvestmentController@buy')->name('investment.buy');
Route::post('investment/sell/{id}', 'InvestmentController@sell')->name('investment.sell');

//* Movements
Route::get('/movement/{id}', 'MovementController@show');
Route::post('/movement{id}', 'MovementController@store');
Route::delete('/movement/{id}', 'MovementController@delete');