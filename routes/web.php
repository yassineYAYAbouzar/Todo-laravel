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



Route::get('/', 'App\Http\Controllers\TodoController@show');

Route::get('create/', 'App\Http\Controllers\TodoController@create');

Route::get('delete/{id}', 'App\Http\Controllers\TodoController@delete');

Route::get('edit/{id}', 'App\Http\Controllers\TodoController@edit');

Route::get('edit_submit/{id}', 'App\Http\Controllers\TodoController@edit_submit');

Route::get('todo_submit/', 'App\Http\Controllers\TodoController@todo_submit');



