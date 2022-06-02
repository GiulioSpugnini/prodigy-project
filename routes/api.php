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
Route::get('/emails', 'Api\EmailController@index');
Route::get('/email/{id}', 'Api\EmailController@show');

Route::get('/offers', 'Api\OfferController@index');
Route::get('/offer/{id}', 'Api\OfferController@show');

Route::get('/quotes', 'Api\QuoteController@index');
Route::get('/quote/{id}', 'Api\QuoteController@show');

Route::get('/calls', 'Api\CallController@index');
Route::get('/call/{id}', 'Api\CallController@show');
