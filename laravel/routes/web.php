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

//Route::get('/home', 'Admin\HomeController@index')->name('home');

Route::middleware('auth')
    ->namespace('admin')
    ->name('admin.')
    ->prefix('admmin')
    ->group(function (){
        //Route::get('/', 'posts@index')->name('post.list');
        //Route::resource('/posts','potsController');
    });
