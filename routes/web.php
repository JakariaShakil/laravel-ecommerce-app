<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Websites Routes are here.
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/*
|--------------------------------------------------------------------------
| Admin Backend Web Routes are here.
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('admin')->group(function () {
    Route::get('/dashboard','App\Http\Controllers\Backend\PagesController@index')->name('dashboard');
    
    //Brand Route
    Route::prefix('brand')->group(function () {
        Route::get('/manage','App\Http\Controllers\Backend\BrandController@index')->name('brand.manage');
        Route::get('/create','App\Http\Controllers\Backend\BrandController@create')->name('brand.create');
        Route::post('/store','App\Http\Controllers\Backend\BrandController@store')->name('brand.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\BrandController@edit')->name('brand.edit');
        Route::post('/edit/{id}','App\Http\Controllers\Backend\BrandController@update')->name('brand.update');
        Route::post('/delete/{id}','App\Http\Controllers\Backend\BrandController@destroy')->name('brand.delete');
    });

});