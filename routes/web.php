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

Route::get('/home', 'App\Http\Controllers\BaseController@home');

Route::get('/services', 'App\Http\Controllers\BaseController@services');

Route::get('/company', 'App\Http\Controllers\BaseController@company');

Route::get('/contact', 'App\Http\Controllers\BaseController@contact');


Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('login');
Route::post('/admin', 'App\Http\Controllers\AdminController@makeLogin');


Route::group(['middleware' => 'auth:admin'], function() {
    Route::get('/dashboard', 'App\Http\Controllers\AdminController@dashboard');
});
