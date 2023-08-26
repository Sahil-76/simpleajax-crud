<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/', 'App\Http\Controllers\TodoController@index');
Route::get('todos/{todo}/edit', 'App\Http\Controllers\TodoController@edit');
Route::post('todos/store', 'App\Http\Controllers\TodoController@store');
Route::delete('todos/destroy/{todo}', 'App\Http\Controllers\TodoController@destroy');