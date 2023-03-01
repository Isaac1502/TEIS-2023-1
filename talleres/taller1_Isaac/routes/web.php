<?php

use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

Route::get('/computers', 'App\Http\Controllers\ComputerController@index')->name('computer.index');
Route::get('/computers/create', 'App\Http\Controllers\ComputerController@create')->name('computer.create');
Route::post('/computers/save', 'App\Http\Controllers\ComputerController@save')->name('computer.save');
Route::get('/computers/{id}', 'App\Http\Controllers\ComputerController@show')->name('computer.show');
Route::get('/computers/delete/{id}', 'App\Http\Controllers\ComputerController@delete')->name('computer.delete');
