<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Basecontroller;
use App\Http\Controllers\Admincotroller;
use App\Http\Controllers\Pagecontroller;

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
    Route::get('/page-add', 'App\Http\Controllers\PageController@AddPage')->name('page-add');
    Route::get('/company-page-add', 'App\Http\Controllers\PageController@ourcompany')->name('company.page.add');


    Route::post('/page-create', 'App\Http\Controllers\PageController@CreatePage')->name('page-create');

    // post routes
    Route::get('/post-add', 'App\Http\Controllers\PostController@create')->name('post-add');
    Route::post('/post-add', 'App\Http\Controllers\PostController@store')->name('post-store');

    Route::get('/post-show', 'App\Http\Controllers\PostController@show')->name('post-show');

    Route::get('/post-edit/{post_id?}', 'App\Http\Controllers\PostController@create')->name('post-edit');
    Route::post('/post-add/{post_id?}', 'App\Http\Controllers\PostController@store')->name('post-store');
    Route::post('/post-delete', 'App\Http\Controllers\PostController@delete')->name('post-delete');

});
