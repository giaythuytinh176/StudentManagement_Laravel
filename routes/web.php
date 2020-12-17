<?php

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

Route::namespace("\\App\\Http\\Controllers\\")->group(function () {
    Route::prefix("students")->group(function () {
        Route::get("index", 'StudentController@index')->name("students.index");
        Route::get("add", 'StudentController@create')->name("students.add");
        Route::post("store", 'StudentController@store')->name("students.store");
        Route::get("edit/{id}", 'StudentController@edit')->name("students.edit");
        Route::post("edit/{id}", 'StudentController@update')->name("students.update");
        Route::get("destroy/{id}", 'StudentController@destroy')->name("students.destroy");
    });
});
