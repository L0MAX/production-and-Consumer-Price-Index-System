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

Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::prefix('/admin')->group(function () {
    // Roles route
    Route::get('/roles', 'RoleController@index')->name('roles');

    Route::post('/roles', 'RoleController@create')->name('roles.create');

    Route::post('/roles/update', 'RoleController@update')->name('roles.update');

    Route::post('/roles/destroy', 'RoleController@destroy')->name('roles.destroy');


    // Users routes
    Route::get('/users', 'UserController@index')->name('users');

    Route::post('/users', 'UserController@create')->name('users.create');

    Route::post('/users/update', 'UserController@update')->name('users.update');

    Route::post('/users/destroy', 'UserController@destroy')->name('users.destroy');


    //consumer price
    Route::get('/consumer', 'ConsumerPriceController@index')->name('consumer');

    Route::post('/consumer', 'ConsumerPriceController@create')->name('consumer.create');

    Route::post('/consumer/update', 'ConsumerPriceController@update')->name('consumer.update');

    Route::post('/consumer/destroy', 'ConsumerPriceController@destroy')->name('consumer.destroy');
});
