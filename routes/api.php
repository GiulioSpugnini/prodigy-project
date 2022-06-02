<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//  api/emails etc...

Route::namespace('Api')->group(function () {
    Route::get('/emails', 'EmailController@index');
    Route::get('/email/{id}', 'EmailController@show');

    Route::get('/offers', 'OfferController@index');
    Route::get('/offer/{id}', 'OfferController@show');

    Route::get('/quotes', 'QuoteController@index');
    Route::get('/quote/{id}', 'QuoteController@show');

    Route::get('/calls', 'CallController@index');
    Route::get('/call/{id}', 'CallController@show');
});
