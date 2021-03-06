<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::middleware('auth')
    ->prefix('admin')
    ->namespace('Admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::resource('customers', 'CustomerController');
        Route::resource('offers', 'OfferController');
        Route::resource('quotes', 'QuoteController');
        Route::resource('emails', 'EmailController');
    });
Route::get('/guest.home', 'Guest\HomeController@index')->name('guest.home');
Route::get('{any?}', function () {
    return view('guest.home');
})->where("any", ".*");
