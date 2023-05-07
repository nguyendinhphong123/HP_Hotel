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

Route::get('/', function () {
    return view('layouts.master');
});

Route::resource('categories',\App\Http\Controllers\CategoryController::class);
Route::resource('rooms',\App\Http\Controllers\RoomController::class);
Route::resource('users',\App\Http\Controllers\UserController::class);

