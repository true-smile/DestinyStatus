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

Route::pattern('platform', 'psn|xbl');

Route::any('/', ['uses' => 'HomeController@index', 'as' => 'home']);

Route::get('select/{gamertag}', ['uses' => 'HomeController@select', 'as' => 'select']);

Route::group(['prefix' => '{platform}/{player}'], function () {
    Route::get('/', ['uses' => 'AccountController@index', 'as' => 'account']);
});
