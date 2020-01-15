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

Route::namespace('Sadhinrana\Contact\Http\Controllers')->group(function () {
    Route::get('contacts', 'ContactController@index')->name('contacts.index');
    Route::post('contacts', 'ContactController@send')->name('contacts.send');
});

