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
    return view('index');
})->name('homepage');

Route::get('/se-connecter', function () {
    return view('user_connect');
})->name('connectpage');

Route::get('/creation-compte', function () {
    return view('user_create');
})->name('usercreatepage');