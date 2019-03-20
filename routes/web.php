<?php

use App\Http\Controllers\PatientController;

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

Route::get('/', function () {
    return redirect(route('patients.index'));
});

Route::resource('patients', 'PatientController');

Route::get('create/{id}','DocumentController@create')->name('filePrint');
//Route::post('store','DocumentController@store')->name('filePrint');