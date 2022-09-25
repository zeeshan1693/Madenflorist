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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function (){
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    Route::prefix('product-setup')->group(function () {
        Route::get('/categories', function(){
            return view('pages.categories');
        })->name('categories');
    });
});


